<?php


class MonthlyPaymentCalculator
{
    /**
     * EX.
    $principal = 10000;
    $interest = 0.10;
    $totalMonths = 24;
    $interestPerMonth = $interest / 12.0;

    $monthlyPayment = round( $principal * ($interestPerMonth * (1 + $interestPerMonth)**$totalMonths) / ((1 + $interestPerMonth)**$totalMonths - 1), 2
     */

    /**
     * @var integer
     */
    public $principal;
    /**
     * @var float
     */
    public $interest;
    /**
     * @var integer
     */
    public $totalMonths;
    /**
     * @var float
     */
    public $interestPerMonth;
    /**
     * @var float
     */
    public $monthlyPayment;
    /**
     * @var integer
     */
    public $downPayment;
    /**
     * @return int
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * @param int $principal
     * @return MonthlyPaymentCalculator
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;
        return $this;
    }

    /**
     * @return float
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @param float $interest
     * @return MonthlyPaymentCalculator
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalMonths()
    {
        return $this->totalMonths;
    }

    /**
     * @param int $totalMonths
     * @return MonthlyPaymentCalculator
     */
    public function setTotalMonths($totalMonths)
    {
        $this->totalMonths = $totalMonths;
        return $this;
    }

    /**
     * @return float
     */

    public function getInterestPerMonth()
    {
        $this->interestPerMonth = $this->interest / 12.0;
        return $this->interestPerMonth;
    }

    /**
     * @param float $interestPerMonth
     * @return MonthlyPaymentCalculator
     */

   public function setInterestPerMonth($interestPerMonth)
    {
        $this->interestPerMonth = $interestPerMonth;
        return $this;
    }

    /**
     * This is a description about the function
     * @param int $foo This is a description about the parameter
     * @return mixed This is a description about the return
     */
    public function getMonthlyPayment(){
        $this->monthlyPayment = round( ($this->principal - $this->downPayment) * ($this->interestPerMonth * (1 + $this->interestPerMonth)**$this->totalMonths) /((1 + $this->interestPerMonth)**$this->totalMonths - 1), 2 );
        return $this-> monthlyPayment;

    }

    /**
     * @param $monthlyPayment
     * @return $monthlyPaymentMinusDownPayment
     */

    /*
    public function getMonthlyPaymentMinusDownPayment($monthlyPayment){
        $this->monthlyPaymentMinusDownPayment = $monthlyPayment - $this->downPayment;
        return $this->monthlyPaymentMinusDownPayment;
    }
    */
}