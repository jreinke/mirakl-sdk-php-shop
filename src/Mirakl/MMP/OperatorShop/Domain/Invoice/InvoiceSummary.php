<?php
namespace Mirakl\MMP\OperatorShop\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getAmountTransferred()
 * @method  $this   setAmountTransferred(float $amountTransferred)
 * @method  float   getTotalCommissionsExclTax()
 * @method  $this   setTotalCommissionsExclTax(float $totalCommissionsExclTax)
 * @method  float   getTotalCommissionsInclTax()
 * @method  $this   setTotalCommissionsInclTax(float $totalCommissionsInclTax)
 * @method  float   getTotalOtherCreditsExclTax()
 * @method  $this   setTotalOtherCreditsExclTax(float $totalOtherCreditsExclTax)
 * @method  float   getTotalOtherCreditsInclTax()
 * @method  $this   setTotalOtherCreditsInclTax(float $totalOtherCreditsInclTax)
 * @method  float   getTotalOtherInvoicesExclTax()
 * @method  $this   setTotalOtherInvoicesExclTax(float $totalOtherInvoicesExclTax)
 * @method  float   getTotalOtherInvoicesInclTax()
 * @method  $this   setTotalOtherInvoicesInclTax(float $totalOtherInvoicesInclTax)
 * @method  float   getTotalNonPayableOrdersExclTax()
 * @method  $this   setTotalNonPayableOrdersExclTax(float $totalNonPayableOrdersExclTax)
 * @method  float   getTotalNonPayableOrdersInclTax()
 * @method  $this   setTotalNonPayableOrdersInclTax(float $totalNonPayableOrdersInclTax)
 * @method  float   getTotalPayableOrdersExclTax()
 * @method  $this   setTotalPayableOrdersExclTax(float $totalPayableOrdersExclTax)
 * @method  float   getTotalPayableOrdersInclTax()
 * @method  $this   setTotalPayableOrdersInclTax(float $totalPayableOrdersInclTax)
 * @method  float   getTotalRefundCommissionsExclTax()
 * @method  $this   setTotalRefundCommissionsExclTax(float $totalRefundCommissionsExclTax)
 * @method  float   getTotalRefundCommissionsInclTax()
 * @method  $this   setTotalRefundCommissionsInclTax(float $totalRefundCommissionsInclTax)
 * @method  float   getTotalRefundOrdersExclTax()  @deprecated  Method deprecated since 1.9.0. Please use getTotalRefundPayableOrdersExclTax instead
 * @method  $this   setTotalRefundOrdersExclTax(float $totalRefundOrdersExclTax)
 * @method  float   getTotalRefundOrdersInclTax() @deprecated  Method deprecated since 1.9.0. Please use getTotalRefundPayableOrdersInclTax instead
 * @method  $this   setTotalRefundOrdersInclTax(float $totalRefundOrdersInclTax)
 * @method  float   getTotalRefundPayableOrdersExclTax()
 * @method  $this   setTotalRefundPayableOrdersExclTax(float $totalRefundPayableOrdersExclTax)
 * @method  float   getTotalRefundPayableOrdersInclTax()
 * @method  $this   setTotalRefundPayableOrdersInclTax(float $totalRefundPayableOrdersInclTax)
 * @method  float   getTotalRefundNonPayableOrdersExclTax()
 * @method  $this   setTotalRefundNonPayableOrdersExclTax(float $totalRefundNonPayableOrdersExclTax)
 * @method  float   getTotalRefundNonPayableOrdersInclTax()
 * @method  $this   setTotalRefundNonPayableOrdersInclTax(float $totalRefundNonPayableOrdersInclTax)
 * @method  float   getTotalSubscriptionExclTax()
 * @method  $this   setTotalSubscriptionExclTax(float $totalSubscriptionExclTax)
 * @method  float   getTotalSubscriptionInclTax()
 * @method  $this   setTotalSubscriptionInclTax(float $totalSubscriptionInclTax)
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 */
class InvoiceSummary extends MiraklObject
{}