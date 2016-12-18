<?= \kato\DropZone::widget([
       'options' => [
           'url'=>'index.php?r=datakeberatan2016/upload',
           'maxFilesize' => '25',
         //  'acceptedFiles' => '.pdf',
           'addRemoveLinks'=> TRUE,
           'clickable'=> TRUE,
       ],
       'clientEvents' => [
           'complete' => "function(file){console.log(file)}",
           'removedfile' => "function(file){alert(file.name + ' is removed')}"
       ],
   ]);
?>

/* 
 * penamaan file sesuai no agenda, 
 * 
 */

