<?php
$this->breadcrumbs=array(
	'Gifts',
);

$this->menu=array(
	array('label'=>'Create Gifts', 'url'=>array('create')),
	array('label'=>'Manage Gifts', 'url'=>array('admin')),
);
?>

<!-- My Custom Javascript  -->
<script type="text/javascript"> 
	function hideshow(obj) {
	 var el = document.getElementById(obj);
		if ( el.style.display != "none" ) {
			el.style.display = 'none';
		}
		else {
			el.style.display = '';
		}
    }

</script>
<!-- end of my Javascript -->

<h2>Gifts</h2>

<div class="view">
  <?php 
  foreach($dataProvider as $data){  ?>
    
     <b>Gift Code:</b>
     <?php echo $data['PCODE']; ?>
     <br />
     
     Web Image <br />
     <?php echo $this->getImageGift($data['PCODE'], 'g');  ?>
     <br />  <br />
     Smartphone Image <br  />
     <?php echo $this->getImageGift($data['PCODE'], 'f');  ?>
     
     <br />  <br />
     <b>Description:</b>
     <?php echo $data['PDESCRIPTION']; ?>
     <br />
     <b>Start Date:</b>
     <?php 
        if ($data['PSTARTPUBDATE']!=NULL)
            echo $data['PSTARTPUBDATE']; 
        else
            echo 'Not Defined yet';
        ?>
     <br />
     
     <b>End Date:</b>
     <?php
     if ($data['PENDPUBDATE']!=NULL)
            echo $data['PENDPUBDATE']; 
        else
            echo 'Not Defined yet';
        ?>
     <br />   <br />
     <a onclick="hideshow('packDisplay<?php echo $data['PCODE']; ?>')" style="cursor: pointer">+ View Related Packages</a> <br />
           <br />     
      <div id="packDisplay<?php echo $data['PCODE']; ?>" style="margin-left: 10px; display: none">
      <?php echo $this->GiftPackageAjax($data['PCODE']); ?>
      </div>
      <br />   <br />
    
     
     <hr>
     
 <?php } ?>
  <?php 
    /*
    $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
     )); 
    */
 ?>
</div>
