<?php
namespace app\models;
//use core\ConnectDB;
use \PDO;
class PagePromo extends Model{

    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
        //$this->data = 'Данные страницы Promo';
        //include_once('settings.php');
       
        //$db = new ConnectDB(HOST, USER, PASSWORD ,DATABASE, CHARSET);
        //$t = $this->connectDB->$action('SELECT * FROM userstatus', PDO::FETCH_NUM );
       /* $sql =  'SELECT `title`,`code`,`YN`,`priceRose`,`photo`,`label`,`promoPrise` FROM `promolabel` 
                INNER JOIN kitpromo
                ON kitpromo.promoLabel_id_promoLabel = promolabel.id_promoLabel
                INNER JOIN goods
                ON kitpromo.goods_id_goods = goods.id_goods';*/
        
        
        
        $sql = "SELECT DISTINCT id_goods,`title_goods`,`code`,`YN`,`priceRose`,`photo`, label,`promoPrise` FROM `goods`
            INNER JOIN kitpromo
            ON goods.id_goods = kitpromo.goods_id_goods
            INNER JOIN promolabel
            ON kitpromo.goods_id_goods = promolabel.id_promoLabel";
        $t = $this->connectDB->$action($sql);

        $this->data =  $t ;
    }
    
    
   

    public function getData()
    {
        
        return $this->data;
    }
    
}

