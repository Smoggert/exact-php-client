<?php namespace Picqer\Financials\Exact;

/**
 * Class FinancialPeriod
 *
 * @package Picqer\Financials\Exact
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=FinancialFinancialPeriods
 *
 * @property Int32 $ID Primary key
 */
class FinancialPeriod extends Model
{

    use Query\Findable;

    protected $primaryKey = 'ID';

    protected $fillable = [
        'ID',
        'Created',
        'CreatorFullName',
        'Division',
        'EndDate',
        'FinPeriod',
        'FinYear',
        'Modified',
        'ModifierFullName',
        'StartDate'
    ];

    protected $url = 'financial/FinancialPeriods';

}
