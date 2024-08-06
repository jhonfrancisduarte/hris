<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Payslip</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; line-height: 1.4; }
        .container { width: 100%; max-width: 430px; margin: 0 auto; }
        table { width: 100%; border-collapse: collapse; }
        .text-right { text-align: right; }
        .text-center { text-align: center; }
        .mt-2 { margin-top: 10px; }
        td { font-size: 9px; text-align: left; }
        tr { padding: 2 auto; width: 100%;}
        .data { font-size: 9px; font-weight: 600;}
        .dots {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .currency { font-family: DejaVu Sans; sans-serif; text-align: right !important; }
    </style>
</head>
<body>

    @php
        $formatCurrency = function($value) {
            return '₱ ' . number_format((float)$value, 2, '.', ',');
        };
    @endphp

    <div class="container">
         {{-- Header --}}
        <div style="display:flex; margin-bottom: 30px;">
            <center style="display:flex;">
                <img src="images/nyc-logo.png" width="35" style="margin-bottom: 2px">
                <img src="images/bagong-pilipinas-logo.png" width="35" style="margin-bottom: 5px">
                <img src="images/payslip-header.png" width="200">
            </center>
        </div>

        <table>
            <tbody>
                <tr>
                    <td width="20%">Office/Division:</td>
                    <td>{{ $payslip->office_division }}</td>
                </tr>
                <tr>
                    <td width="20%">Pay Period:</td>
                    <td>
                        {{ $dates['startDateFirstHalf'] ? \Carbon\Carbon::parse($dates['startDateFirstHalf'])->format('F') : '' }}
                        {{ $dates['startDateFirstHalf'] ? \Carbon\Carbon::parse($dates['startDateFirstHalf'])->format('d') : '' }} - 
                        {{ $dates['endDateSecondHalf'] ? \Carbon\Carbon::parse($dates['endDateSecondHalf'])->format('d') : '' }}
                        {{ $dates['startDateFirstHalf'] ? \Carbon\Carbon::parse($dates['startDateFirstHalf'])->format('Y') : '' }} 
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td width="20%">Employee's Name:</td>
                    <td width="30%">{{ $payslip->name }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td width="20%">Position:</td>
                    <td width="30%">{{ $payslip->position }}</td>
                    <td width="15%">Employee No: </td>
                    <td width="20%">{{ $payslip->employee_number }}</td>
                    <td width="10%">Acct. No: </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        
        <center><p class="data" style="margin: 10px 0;">***EARNINGS***</p></center>

        <table>
            <tbody>
                <tr>
                    <td class="dots">Basic Salary............................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->rate_per_month) }}</td>
                </tr>
                <tr>
                    <td class="dots">Less: Late & Absences...........................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->late_absences) }}</td>
                </tr>
                {{-- <tr>
                    <td class="dots">Leave Without Pay..................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->leave_without_pay) }}</td>
                </tr> --}}
                <tr>
                    <td class="dots">Gross Earnings........................................................................................................................
                    </td>
                    <td class="currency" width="30%" style="border-top: 1px solid black;">{{ $formatCurrency($payslip->gross_salary_less) }}</td>
                </tr>
                <tr>
                    <td class="dots">PERA......................................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->personal_economic_relief_allowance) }}</td>
                </tr>
                <tr>
                    <td class="dots">OTHERS.................................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency(0) }}</td>
                </tr>
                <tr>
                    <td class="dots" style="text-align: right !important; padding-right: 20px; font-weight:bold;">Total Earnings</td>
                    <td class="currency" width="30%" style="border-bottom: 1px solid black; font-weight:bold; border-top: 1px solid black;">{{ $formatCurrency($payslip->total_earnings) }}</td>
                </tr>
            </tbody>
        </table>

        <center><p class="data" style="margin: 10px 0;">***DEDUCTIONS***</p></center>

        <table>
            <tbody>
                <tr>
                    <td class="dots">GSIS Premium.........................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->additional_gsis_premium) }}</td>
                </tr>
                <tr>
                    <td class="dots">BIR Witholding Tax..................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->w_holding_tax) }}</td>
                </tr>
                <tr>
                    <td class="dots">PBB Witholding Tax.................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency(0) }}</td>
                </tr>
                <tr>
                    <td class="dots">Philhealth Contribution.............................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->philhealth) }}</td>
                </tr>
                <tr>
                    <td class="dots">Pag-Ibig Contribution...............................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->pagibig_contribution) }}</td>
                </tr>
                <tr>
                    <td class="dots">HDMF Contribution...................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency(0) }}</td>
                </tr>
            </tbody>
        </table>

        <center><p style="margin: 10px 0;"></p></center>

        <table>
            <tbody>
                <tr>
                    <td width="20%"></td>
                    <td width="15%"></td>
                    <td width="15%">Effective Date</td>
                    <td width="15%"></td>
                    <td width="20%">Termination Date</td>
                    <td width="15%"></td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td class="dots">GSIS - Salary Loan..................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->salary_loan) }}</td>
                </tr>
                <tr>
                    <td class="dots">Policy Loan..............................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->policy_loan) }}</td>
                </tr>
                <tr>
                    <td class="dots">EAL..........................................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->eal) }}</td>
                </tr>
                <tr>
                    <td class="dots">Emergency Loan......................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->emergency_loan) }}</td>
                </tr>
                <tr>
                    <td class="dots">MPL..........................................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->mpl) }}</td>
                </tr>
                <tr>
                    <td class="dots">Housing....................................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->housing_loan) }}</td>
                </tr>
                <tr>
                    <td class="dots">Computer..................................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency(0) }}</td>
                </tr>
                <tr>
                    <td class="dots">OULI.........................................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->ouli_prem) }}</td>
                </tr>
                <tr>
                    <td class="dots">GFAL........................................................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->gfal) }}</td>
                </tr>
            </tbody>
        </table>

        <center><p style="margin: 10px 0;"></p></center>

        <table>
            <tbody>
                <tr>
                    <td class="dots">HDMF - Multi-Purpose Loan (MPL)..........................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->mpl) }}</td>
                </tr>
                <tr>
                    <td class="dots">Other Loans/Payments</td>
                    <td class="currency" width="30%"></td>
                </tr>
                <tr>
                    <td class="dots" style="padding-left: 20px;">NYCEMPC Share Capital/Membership............................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->eal) }}</td>
                </tr>
                <tr>
                    <td class="dots" style="padding-left: 20px;">NYCEMPC Loan (MPL)....................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->emergency_loan) }}</td>
                </tr>
                <tr>
                    <td class="dots" style="padding-left: 20px;">NYCEMPC Educ. Loan (EL).............................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->mpl) }}</td>
                </tr>
                <tr>
                    <td class="dots" style="padding-left: 20px;">NYCEMPC Personal Loan (PL)........................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->housing_loan) }}</td>
                </tr>
                <tr>
                    <td class="dots" style="padding-left: 20px;">NYCEMPC Business Loan...............................................................................................
                    <td class="currency" width="30%">{{ $formatCurrency(0) }}</td>
                </tr>
                <tr>
                    <td class="dots" style="padding-left: 20px;">NYCEMPC Dues...............................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->ouli_prem) }}</td>
                </tr>
                <tr>
                    <td class="dots" style="padding-left: 20px;">COA Dis Allowance...........................................................................................................
                    </td>
                    <td class="currency" width="30%">{{ $formatCurrency($payslip->gfal) }}</td>
                </tr>
            </tbody>
        </table>
        
        <center><p style="margin: 10px 0;"></p></center>

        <table>
            <tbody>
                <tr>
                    <td class="dots">Landbank Mobile Saver............................................................................................................
                    </td>
                    <td class="currency" width="30%">-</td>
                </tr>
                <tr>
                    <td class="dots" style="padding-left: 20px;">Other Deductions (Philhealth Adjustment)........................................................................
                    </td>
                    <td class="currency" width="30%" style="border-bottom: 1px solid black;">-</td>
                </tr>
                <tr>
                    <td class="dots" style="text-align: right !important; padding-right: 20px; font-weight:bold;">Total Deductions</td>
                    <td class="currency" width="30%" style="border-bottom: 1px solid black; font-weight:bold;">{{ $formatCurrency($payslip->total_deduction) }}</td>
                </tr>
            </tbody>
        </table>
        
        <center><p style="margin: 10px 0;"></p></center>

        <table>
            <tbody>
                <tr style="border-bottom: 1px dashed rgb(107, 107, 107)">
                    <td width="20%"></td>
                    <td width="20%" style="font-weight:bold;">NET PAY</td>
                    <td width="40%"></td>
                    <td class="currency" width="20%" style="border-bottom: 1px solid black; font-weight:bold;">{{ $formatCurrency($payslip->total_amount_due) }}</td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td width="20%">Amount Due</td>
                    <td width="40%">
                        {{ $dates['startDateFirstHalf'] ? \Carbon\Carbon::parse($dates['startDateFirstHalf'])->format('F') : '' }}
                        {{ $dates['startDateFirstHalf'] ? \Carbon\Carbon::parse($dates['startDateFirstHalf'])->format('d') : '' }} - 
                        {{ $dates['endDateSecondHalf'] ? \Carbon\Carbon::parse($dates['startDateSecondHalf'])->format('d') : '' }}
                        {{ $dates['startDateFirstHalf'] ? \Carbon\Carbon::parse($dates['startDateFirstHalf'])->format('Y') : '' }} 
                    </td>
                    <td class="currency" width="20%" style="border-bottom: 1px solid black;">{{ $formatCurrency($payslip->net_amount_due_first_half) }}</td>
                </tr>
                <tr>
                    <td width="20%"></td>
                    <td width="20%">Amount Due</td>
                    <td width="40%">
                        {{ $dates['startDateFirstHalf'] ? \Carbon\Carbon::parse($dates['startDateFirstHalf'])->format('F') : '' }}
                        {{ $dates['startDateFirstHalf'] ? \Carbon\Carbon::parse($dates['endDateFirstHalf'])->format('d') : '' }} - 
                        {{ $dates['endDateSecondHalf'] ? \Carbon\Carbon::parse($dates['endDateSecondHalf'])->format('d') : '' }}
                        {{ $dates['startDateFirstHalf'] ? \Carbon\Carbon::parse($dates['startDateFirstHalf'])->format('Y') : '' }} 
                    </td>
                    <td class="currency" width="20%" style="border-bottom: 1px solid black;">{{ $formatCurrency($payslip->net_amount_due_second_half) }}</td>
                </tr>
            </tbody>
        </table>
        
        <center><p style="margin: 10px 0;"></p></center>

        <table>
            <tbody>
                <tr>
                    <td width="60%" style="padding-bottom: 20px;">Prepared By:</td>
                    <td width="40%" style="padding-bottom: 20px;">Noted By:</td>
                </tr>
                <tr>
                    <td width="60%" style="font-weight: bold">{{ $preparedBy->name }}</td>
                    <td width="40%" style="font-weight: bold">{{ $signatories ? $signatories->name : 'XXXXXXXXXX' }}</td>
                </tr>
                <tr>
                    <td width="60%" style="font-style: italic">{{ $preparedBy->position }}</td>
                    <td width="40%" style="font-style: italic">{{ $signatories ? $signatories->position : 'Position' }}</td>
                </tr>
            </tbody>
        </table>


    </div>
</body>
</html>