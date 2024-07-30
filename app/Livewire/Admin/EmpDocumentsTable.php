<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\EmployeeDocument;
use Illuminate\Support\Facades\Storage;

class EmpDocumentsTable extends Component
{
    public $documentsByType = [];
    public $tabs;
    public $documentToDelete = null;
    public $isDeleting = false;

    public function mount()
    {
        $this->tabs = [
            'saln' => 'SALN',
            'ipcr' => 'IPCR',
            'bir1902' => 'BIR Form 1902',
            'bir1905' => 'BIR Form 1905',
            'bir2316' => 'BIR Form 2316',
            'certificate' => 'Certificate of Employment',
            'serviceRecord' => 'Service Record',
        ];

        $this->loadDocuments();
    }

    public function loadDocuments()
    {
        $documents = EmployeeDocument::with('user')->get();
        $this->documentsByType = [];
        foreach ($documents as $document) {
            $this->documentsByType[$document->document_type][] = $document;
        }
    }

    public function confirmDelete($id)
    {
        $this->documentToDelete = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deleteDocument()
    {
        if ($this->documentToDelete) {
            $this->isDeleting = true;

            try {
                $document = EmployeeDocument::findOrFail($this->documentToDelete);

                if (Storage::exists($document->file_path)) {
                    Storage::delete($document->file_path);
                }

                $document->delete();

                $this->loadDocuments();
                $this->dispatch('notify', [
                    'message' => 'Document deleted successfully!',
                    'type' => 'success'
                ]);
            } catch (\Exception $e) {
                $this->dispatch('notify', [
                    'message' => 'An error occurred while deleting the document.',
                    'type' => 'error'
                ]);
                \Log::error('Document deletion error: ' . $e->getMessage());
            } finally {
                $this->isDeleting = false;
                $this->documentToDelete = null;
            }
        } else {
            $this->dispatch('notify', [
                'message' => 'No document selected for deletion!',
                'type' => 'error'
            ]);
        }
    }

    public function render()
    {
        return view('livewire.admin.emp-documents-table', [
            'documentsByType' => $this->documentsByType,
            'tabs' => $this->tabs
        ]);
    }
}
