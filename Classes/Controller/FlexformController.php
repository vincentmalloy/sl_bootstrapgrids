<?php

namespace SimonLundius\BootstrapGrids\Controller;

class FlexformController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected $cols = [
        'One',
        'Two',
        'Three',
        'Four',
        'Five',
        'Six',
        'Seven',
        'Eight',
        'Nine',
        'Ten',
        'Eleven',
        'Twelve',
    ];

    protected $values = [
        ['08,33% (1/12)', '1'],
        ['16,67% (1/6)', '2'],
        ['25,00% (1/4)', '3'],
        ['33,33% (1/3)', '4'],
        ['41,67% (5/12)', '5'],
        ['50,00% (1/2)', '6'],
        ['58,33% (7/12)', '7'],
        ['66,67% (2/3)', '8'],
        ['75,00% (3/4)', '9'],
        ['83,33% (5/6)', '10'],
        ['91,67% (11/12)', '11'],
        ['100,00%', '12'],
    ];

    public function getColumnOptions(&$conf)
    {
        $sum = 0;
        $except=$conf['field'];
        foreach ($this->cols as $col) {
            if ('col'.$col.'Width' != $except) {
                if (array_key_exists('col'.$col.'Width', $conf['row'])) {
                    if(!is_array($conf['row']['col'.$col.'Width'])){
                        $sum += intval($conf['row']['col'.$col.'Width']);
                    }else{
                        $sum += intval($conf['row']['col'.$col.'Width'][0]);
                    }
                    
                }
            }
        }
        $conf['items']=array_slice($this->values,0,12-$sum);
        return;
    }
}
