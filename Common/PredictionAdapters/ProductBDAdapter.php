<?php
namespace Tracker\Common\PredictionAdapters;

use Doctrine\OrientDB\Query\Query;

class ProductBDAdapter {
    private $BdProductos = array(
        '101910'=>array('codigo_producto'=>101910,'nombre'=>'Performance Designed Products Afterglow Wired Gamepad Assortment - Xbox 360 and PS3 (PL3702)','codigo_categoria'=>765,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=926022&w=100'),
        '29142'=>array('codigo_producto'=>29142,'nombre'=>'Reloj para caballero diesel watches advanced (Silver)','codigo_categoria'=>160,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=97800&w=100'),
        '35897'=>array('codigo_producto'=>35897,'nombre'=>'Celular LG Esteem 4G (MetroPCS)','codigo_categoria'=>769,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=121869&w=100'),
        '101706'=>array('codigo_producto'=>101706,'nombre'=>'Parlante BT X-KIM BOOM-BTA','codigo_categoria'=>750,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=638104&w=100'),
        '34506'=>array('codigo_producto'=>34506,'nombre'=>'Cable de Extensiòn','codigo_categoria'=>738,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=127952&w=100'),
        '42566'=>array('codigo_producto'=>42566,'nombre'=>'Docker para masa','codigo_categoria'=>86,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=146610&w=100'),
        '39515'=>array('codigo_producto'=>39515,'nombre'=>'Philips Norelco PQ208/40 Travel Electric Razor','codigo_categoria'=>789,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=923642&w=100'),
        '76451'=>array('codigo_producto'=>76451,'nombre'=>'Adaptador Samsung one 19 V','codigo_categoria'=>1227,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=268074&w=100'),
        '74098'=>array('codigo_producto'=>74098,'nombre'=>'Tablet Silver Max Kids 3D','codigo_categoria'=>728,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=563753&w=100'),
        '37020'=>array('codigo_producto'=>37020,'nombre'=>'Muscletech Masstech Performance Supplement, Milk Chocolate, 7.05 Pound','codigo_categoria'=>821,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=923099&w=100'),
        '6688'=>array('codigo_producto'=>6688,'nombre'=>'Torno esquinero media luna 1 nivel blanco','codigo_categoria'=>100,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=18953&w=100'),
        '105368'=>array('codigo_producto'=>105368,'nombre'=>'Olla de cocción lenta Hamilton Beach Setn','codigo_categoria'=>86,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=930069&w=100'),
        '25818'=>array('codigo_producto'=>25818,'nombre'=>'Cobertor Char Broil de 173 cm','codigo_categoria'=>108,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=88899&w=100'),
        '7574'=>array('codigo_producto'=>7574,'nombre'=>'Gel Multiorgasmos x 20 ml- colapsible','codigo_categoria'=>811,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=21175&w=100'),
        '50492'=>array('codigo_producto'=>50492,'nombre'=>'Cellucor C4 Extreme Workout Supplement, Icy Blue Razz, 342 Gram','codigo_categoria'=>821,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=930490&w=100'),
        '6695'=>array('codigo_producto'=>6695,'nombre'=>'Tendedero de pared duplex de 60 cm','codigo_categoria'=>100,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=18966&w=100'),
        '32436'=>array('codigo_producto'=>32436,'nombre'=>'Paco Rabanne 1 Million By Paco Rabanne For Men Edt Spray, 3.4 Ounce','codigo_categoria'=>778,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=913293&w=100'),
        '28898'=>array('codigo_producto'=>28898,'nombre'=>'GUESS Mens U0274G1 Dynamic Brown Leather Watch','codigo_categoria'=>160,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=911214&w=100'),
        '69876'=>array('codigo_producto'=>69876,'nombre'=>'Faja cachetera con broches','codigo_categoria'=>789,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=238300&w=100'),
        '76214'=>array('codigo_producto'=>76214,'nombre'=>'Reloj para caballero GUESS U13577G1','codigo_categoria'=>160,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=911254&w=100'),
        '92534'=>array('codigo_producto'=>92534,'nombre'=>'Crema para Manos y Cuerpo 200','codigo_categoria'=>789,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=528707&w=100'),
        '31989'=>array('codigo_producto'=>31989,'nombre'=>'Raqueta Adidas Champ.','codigo_categoria'=>1318,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=116590&w=100'),
        '30159'=>array('codigo_producto'=>30159,'nombre'=>'Teléfono inalámbrico Panasonic KX-PRS120W Digital.','codigo_categoria'=>769,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=924239&w=100'),
        '32873'=>array('codigo_producto'=>32873,'nombre'=>'Combo Soporte TV + Accesorios.','codigo_categoria'=>738,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=111031&w=100'),
        '59879'=>array('codigo_producto'=>59879,'nombre'=>'Mesón Arezzo 1.50 GAS 4 PI EE INX','codigo_categoria'=>86,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=212058&w=100'),
        '41279'=>array('codigo_producto'=>41279,'nombre'=>'Set de juego Genius 3 en 1 GX-GAMING KMH 100 (teclado,mouse,auriculares)','codigo_categoria'=>728,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=924432&w=100'),
        '28982'=>array('codigo_producto'=>28982,'nombre'=>'Locion Swiss Army para hombre 100 ml','codigo_categoria'=>778,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=928203&w=100'),
        '16435'=>array('codigo_producto'=>16435,'nombre'=>'Champucera juvenil corazón','codigo_categoria'=>91,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=53825&w=100'),
        '64694'=>array('codigo_producto'=>64694,'nombre'=>'ONeal Racing Element Toxic Mens Motocross/Off-Road/Dirt Bike Motorcycle Pants - Black/Green / Size 28','codigo_categoria'=>1318,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=220449&w=100'),
        '28869'=>array('codigo_producto'=>28869,'nombre'=>'LG Electronics HBS-730.ACUSBKK Tone and Bluetooth Headset, Black','codigo_categoria'=>750,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=908316&w=100'),
        '22473'=>array('codigo_producto'=>22473,'nombre'=>'Resistencia de velocidad lateral','codigo_categoria'=>842,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=76677&w=100'),
        '87432'=>array('codigo_producto'=>87432,'nombre'=>'Relojes para dama Geneva Silver y Gold Clasicos','codigo_categoria'=>1215,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=927075&w=100'),
        '29178'=>array('codigo_producto'=>29178,'nombre'=>'Battlefield 4 - PlayStation 4','codigo_categoria'=>765,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=928561&w=100'),
        '72290'=>array('codigo_producto'=>72290,'nombre'=>'Multifuncional con twister y escalador','codigo_categoria'=>842,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=250541&w=100'),
        '42516'=>array('codigo_producto'=>42516,'nombre'=>'Tenis Skechers','codigo_categoria'=>1215,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=145025&w=100'),
        '35896'=>array('codigo_producto'=>35896,'nombre'=>'Celular LG L70 Optimus (MetroPCS)','codigo_categoria'=>769,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=121868&w=100'),
        '14817'=>array('codigo_producto'=>14817,'nombre'=>'Comedero portátil para mascotas importado','codigo_categoria'=>473,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=75147&w=100'),
        '94386'=>array('codigo_producto'=>94386,'nombre'=>'Picatodo Chopper Mix','codigo_categoria'=>524,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=558942&w=100'),
        '34734'=>array('codigo_producto'=>34734,'nombre'=>'Optimum Nutrition 100% Whey Gold Standard, Vanilla Ice Cream, 5 Pound','codigo_categoria'=>821,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=117682&w=100'),
        '104265'=>array('codigo_producto'=>104265,'nombre'=>'Celular Samsung Galaxy Young 2','codigo_categoria'=>769,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=742447&w=100'),
        '26075'=>array('codigo_producto'=>26075,'nombre'=>'Libreta la Iliada','codigo_categoria'=>147,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=89567&w=100'),
        '21805'=>array('codigo_producto'=>21805,'nombre'=>'Estuche Adidas vario bag','codigo_categoria'=>1318,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=74878&w=100'),
        '32895'=>array('codigo_producto'=>32895,'nombre'=>'GUESS Mens U12604G1 Self Assured Round Diamond Accent Black IP Watch','codigo_categoria'=>160,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=911251&w=100'),
        '74409'=>array('codigo_producto'=>74409,'nombre'=>'Cuchilla picahielo con anillo de goma','codigo_categoria'=>86,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=253702&w=100'),
        '101176'=>array('codigo_producto'=>101176,'nombre'=>'Kit Colchón primavera 140 x 190 + plumón.','codigo_categoria'=>78,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=630643&w=100'),
        '87436'=>array('codigo_producto'=>87436,'nombre'=>'Juego para asado 3 piezas','codigo_categoria'=>86,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=476999&w=100'),
        '92484'=>array('codigo_producto'=>92484,'nombre'=>'Shampoo protección color 500','codigo_categoria'=>805,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=528579&w=100'),
        '25848'=>array('codigo_producto'=>25848,'nombre'=>'Patio Bistro Black Electric','codigo_categoria'=>108,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=615819&w=100'),
        '57926'=>array('codigo_producto'=>57926,'nombre'=>'Chompa con cierre roja DIM - Hombre','codigo_categoria'=>1284,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=660018&w=100'),
        '49203'=>array('codigo_producto'=>49203,'nombre'=>'Disfraz de león para bebes','codigo_categoria'=>1246,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=901912&w=100'),
        '31463'=>array('codigo_producto'=>31463,'nombre'=>'Soporte para televisiòn  23-37" Fija','codigo_categoria'=>738,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=105824&w=100'),
        '28225'=>array('codigo_producto'=>28225,'nombre'=>'Colchón Verano de 90 x 190','codigo_categoria'=>78,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=95141&w=100'),
        '73639'=>array('codigo_producto'=>73639,'nombre'=>'HJC CL-XY Pop N Lock Youth Motocross Helmet (MC-2, Large)','codigo_categoria'=>1318,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=924588&w=100'),
        '23191'=>array('codigo_producto'=>23191,'nombre'=>'G-SHOCK G-SHOCK MENS GA-200SH-1A Sports Watch BLACK','codigo_categoria'=>160,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=927943&w=100'),
        '34497'=>array('codigo_producto'=>34497,'nombre'=>'Lámpara a gas','codigo_categoria'=>1234,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=121444&w=100'),
        '94764'=>array('codigo_producto'=>94764,'nombre'=>'Parlante Bluetooth Smartphone X-KIM DRIVE-BT-Negro','codigo_categoria'=>750,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=562281&w=100'),
        '106237'=>array('codigo_producto'=>106237,'nombre'=>'Manillas','codigo_categoria'=>160,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=935780&w=100'),
        '51758'=>array('codigo_producto'=>51758,'nombre'=>'MuscleTech Test HD, 90ct, Testosterone Booster','codigo_categoria'=>821,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=904210&w=100'),
        '91487'=>array('codigo_producto'=>91487,'nombre'=>'Minicomponente Panasonic 350W 2USB','codigo_categoria'=>750,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=473341&w=100'),
        '72568'=>array('codigo_producto'=>72568,'nombre'=>'Bañera portable para bebes Boon Azul/Blanco.','codigo_categoria'=>181,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=247402&w=100'),
        '30064'=>array('codigo_producto'=>30064,'nombre'=>'Short Tommy Hilfiger Light New Aqua','codigo_categoria'=>169,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=100940&w=100'),
        '25413'=>array('codigo_producto'=>25413,'nombre'=>'Como Nace el universo Gloria trevi','codigo_categoria'=>257,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=901646&w=100'),
        '32998'=>array('codigo_producto'=>32998,'nombre'=>'Stuhrling Original Mens 574.01 Executive II Automatic Skeleton Black Leather Band Watch','codigo_categoria'=>160,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=911332&w=100'),
        '32214'=>array('codigo_producto'=>32214,'nombre'=>'Audifonos','codigo_categoria'=>750,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=108567&w=100'),
        '57167'=>array('codigo_producto'=>57167,'nombre'=>'Jacuzzi portable para 4 personas','codigo_categoria'=>1327,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=198530&w=100'),
        '1134'=>array('codigo_producto'=>1134,'nombre'=>'Shampoo tono sobre tono Marlioü para cabellos Rubios y Dorados  x 300 ml','codigo_categoria'=>805,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=40314&w=100'),
        '26229'=>array('codigo_producto'=>26229,'nombre'=>'Monitor GPS Fit de Soleus SG100 - 351','codigo_categoria'=>1215,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=89980&w=100'),
        '43487'=>array('codigo_producto'=>43487,'nombre'=>'Desplazador de aire 1625 PCM','codigo_categoria'=>524,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=481042&w=100'),
        '106881'=>array('codigo_producto'=>106881,'nombre'=>'Comederos para mascotas de silicona WQ-BL01-PINK','codigo_categoria'=>473,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=934302&w=100'),
        '38397'=>array('codigo_producto'=>38397,'nombre'=>'Nevera Luxur Challenger 254 Litros CR 370B','codigo_categoria'=>519,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=933089&w=100'),
        '94355'=>array('codigo_producto'=>94355,'nombre'=>'Sanduchera','codigo_categoria'=>524,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=558270&w=100'),
        '29916'=>array('codigo_producto'=>29916,'nombre'=>'BLU Studio 5.0 II Unlocked Dual Sim Phone, White','codigo_categoria'=>769,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=924221&w=100'),
        '62999'=>array('codigo_producto'=>62999,'nombre'=>'Balón Fusión Mini','codigo_categoria'=>1284,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=521392&w=100'),
        '57911'=>array('codigo_producto'=>57911,'nombre'=>'Gorra azul rey DIM','codigo_categoria'=>1284,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=521311&w=100'),
        '61525'=>array('codigo_producto'=>61525,'nombre'=>'Cachetero mujer - Azul','codigo_categoria'=>1284,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=521381&w=100'),
        '104289'=>array('codigo_producto'=>104289,'nombre'=>'Camiseta oficial hombre - Morada','codigo_categoria'=>1284,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=792860&w=100'),
        '57913'=>array('codigo_producto'=>57913,'nombre'=>'Gorra roja DIM','codigo_categoria'=>1284,'imagen'=>'http://www.coordiutil.com/shared/dbfile.php?id=521317&w=100'),
    );
    function __construct() {
        
    }
    public function buscarProducto($p) {
        if(empty($this->BdProductos[$p->codigo_producto])) {
            return array();
        }
        return $this->BdProductos[$p->codigo_producto];
    }
}
?>