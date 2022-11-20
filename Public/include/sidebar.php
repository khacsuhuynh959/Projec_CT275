<?php 
    require_once('controller/quanlypublic.php');
?>

<div class="row" style="justify-content: space-between; margin-top: 20px;">
    <?php 
        $br = new brand();
        $ds_brand = $br->ds_brand();
        while ($row = $ds_brand->fetch_array()) {
            $link_img = '../img/'.$row['anh'];
    ?>
        <a <?php if(isset($_GET['iddm']) && $_GET['iddm']==$row['ma_dm']) { echo "style = 'border-color: #f12711;'"; } else {}; ?> class= "btn btn-color btn-brand-radius" href="?action=brand&iddm=<?php echo $row['ma_dm']?>"><img style="width: 100%;" src= <?php echo $link_img ?> alt=""></a>
    <?php 
        } 
    ?>  
</div>

            