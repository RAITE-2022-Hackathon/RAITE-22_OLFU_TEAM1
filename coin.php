<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>

<?php 

include "navbar.php";
include "vendor/autoload.php";
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
$client = new CoinGeckoClient();
$data = $result = $client->coins()->getMarkets('usd');
//echo "<pre>";
//print_r($data);
//echo "</echo>";


 ?>
 <table class='table'>
     <thead class="thead-dark">
      <tr>
         <th>Coin Name</th>
         <th>Current Price</th>
          <th>1H</th>
          <th>24H</th>
         <th>Market Cap</th>
         <th>Total Volume</th>
         
        
       </tr>
    </thead>
     <?php
     $ctr = 0;

      while ($ctr < 100) {
         # code...
       

     ?>
     <tbody>
     <tr>
     <td><img src="<?php echo $data[$ctr]['image']; ?>" height= "20" width="20">
      <?php echo $data[$ctr]['name']; ?>


     </td>
     <td><?php $curpr = $data[$ctr]['current_price'];
            echo $formated = number_format($curpr,5);?></td>
     <td><?php $ttf = $data[$ctr]['price_change_24h']; 
            echo $formated = number_format($ttf,1),"%";?></td>
     <td><?php $ohf = $data[$ctr]['price_change_24h']/24;
            echo $formated = number_format($ohf,1),"%";?></td>
     
     <td><?php echo $data[$ctr]['market_cap']; ?></td>
     <td><?php echo $data[$ctr]['total_volume']; ?></td>
     
     
      </tr>
     <?php
     $ctr++;
}  ?>
</tbody>
 </table>

 

</body>
</html>