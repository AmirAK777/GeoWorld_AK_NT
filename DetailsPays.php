<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php';?>
<?php
require_once 'inc/manager-db.php'; 
if(isset($_GET['id']) & !empty($_GET['id']))
$id = $_GET['id'];

$detail = getCountries($id);


?>

<main role="main" class="flex-shrink-0">

<div class="container">
    <h1>Détails du Pays</h1>
    
     <table class="table">
         <tr>
           <th>Nom</th>
           <th>Population</th>
           <th>Region</th>
           <th>Surface du Pays </th>
           <th>Esperence de vie </th>
           <th>Dirigeant du pays</th>
           <th>Gouvernement</th>
           <th>Capitale</th>
           <th>Drapeau</th>
         </tr>
       <?php foreach ($detail as $pays): ?>
          <tr>
            <td> <?php echo $pays->Name ?></td>
            <td> <?php echo $pays->Population ?></td>
            <td> <?php echo $pays->Region ?></td>
            <td> <?php echo $pays->SurfaceArea ?></td>
            <td> <?php echo $pays->LifeExpectancy ?></td>
            <td> <?php echo $pays->HeadOfState ?></td>
            <td> <?php echo $pays->GovernmentForm ?></td>
            <td> <?php echo getCapital( $pays->Capital) ?>
            <td> <img src = images\l\<?php echo $pays->Code2 ?>.svg></td>
          </tr>
          <?php endforeach ; ?>
     </table>
    </section>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>