<?php
namespace App\Imports;

use App\Models\Passbook;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PassbookImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Debugging
        \Log::info('Importing row:', $row);

        return new Passbook([
            'order_no' => $row['order_no'],
            'user_yern_status' => $row['user_yern_status'],
            'invoice_no' => $row['invoice_no'],
            'export_lc' => $row['export_lc'],
            'invoice_value' => $row['invoice_value'],
            'set_pack' => $row['set_pack'],
            'quantity' => $row['quantity'],
            'ctns' => $row['ctns'],
            'ud_con' => $row['ud_con'],
            'ud_wt' => $row['ud_wt'],
            'shipping_bill_no' => $row['shipping_bill_no'],
            'shipping_bill_date' => $row['shipping_bill_date'],
            'passbook_entry_no' => $row['passbook_entry_no'],
            'check_status' => $row['check_status'],
            'hand_over_date' => $row['hand_over_date'],
            'depot' => $row['depot'],
            'week' => $row['week'],
        ]);
    }
}
