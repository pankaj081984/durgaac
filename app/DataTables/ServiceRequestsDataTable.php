<?php

namespace App\DataTables;

use App\Models\ServiceRequest;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ServiceRequestsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'servicerequests.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ServiceRequest $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ServiceRequest $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('servicerequests-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')                    
                    ->orderBy(1)
                    //->buttons(
                        //Button::make('excel'),
                       // Button::make('csv'),
                       // Button::make('print'),
                        //Button::make('reload')
                   // )
                   ;
                    
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            /*Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('add your columns'),
            Column::make('created_at'),
            Column::make('updated_at'),*/

            'srNumber',
        'srOpendate',
       'srAssigned',
       'assignedTo',
       'callType',
        'escalation',
        'srType',
        'severity',
        'mood',
       'keyAccount',
        'accountType',
        'modelNo',
            'serialNo1',
            'serialNo2',
            'purchasedOn',
            'dealerName',
            'dealerMobile',
            'warranty',
            'totalAmount',
            'tcr',
            'status',
            'cancelSR',
            'otp',
        'fullName',
        'mobileNo',
        'whatsappNo',
        'emailId',
        'address',
        'area',
        'city',
        'district',
        'landmark',
        'attendTime',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ServiceRequests_' . date('YmdHis');
    }
}
