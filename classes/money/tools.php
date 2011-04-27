<?php defined('SYSPATH') or die('No direct script access.');

class Money_Tools extends Controller {
    
    /*
     * Currency Exchange
     */
    static function currency_exchange($amount, $from, $to = 'USD') {

        // Check if Amount if Numeric
        if(is_numeric($amount))
        {
            // Local Currency Exchange Rate
            $currency = new Model_Money_Exchange_Rate($from);

            // If Model Loaded
            if($currency->loaded())
            {
                // Make the Convertion to USD
                $convertion = $amount * $currency->inverse;

                if($to == 'USD')
                {
                    // Return Result
                    return $convertion;
                }
                  else
                {
                    // Local Currency Exchange Rate
                    $currency = new Model_Money_Exchange_Rate($to);

                    // If Model Loaded
                    if($currency->loaded())
                    {
                        // Make the Convertion to Target Currency
                        $convertion = $convertion * $currency->rate;

                        // Return Result
                        return $convertion;
                    }
                      else
                    {
                        // Currency Exchange Not Found
                        return FALSE;
                    }
                }
            }
              else
            {
                // Currency Exchange Not Found
                return FALSE;
            }
        }
          else
        {
            // Invalid Ammount
            return FALSE;
        }

    }    
    
} // End of Money_Tools Class