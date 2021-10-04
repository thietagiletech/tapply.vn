<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Pest\Concerns\Expectable;

class TestExport implements FromCollection, WithHeadings
{
use Expectable;
   
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $users = User::all();
        foreach ($users as $user) {
            $arr[] = array(
                '0' => $user->id,
                '1' => $user->name,
                '2' => $user->email,
                '3' => $user->avatar

            );
        }
        return collect($arr);
    }
    public function headings(): array
    {
        return [
            'id',
            'name',
           'email',
           'avatar'
        ];
    }

}
