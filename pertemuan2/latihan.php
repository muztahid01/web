<?php
if(iseet($_POST['KIRIM'])=="1"){
    $nilai = $post('nilai');
    if($nilai>=60){
        echo("anda lulus");
    } else{
        echo("anda tidak lulus");
} 
}
?>

<from class ="from-control" name="form1" method="post" action="">
    <div class ="mb-3">
        <label id="nilai" for="nilai">nilai akhir:</label>
        <input id="nilai" name="nilai" type="text" class="from-control"/>
    </div>
    <input id="kirim" name="kirim" type="hidden" class="form-control" value="1"/>
    <button type="submit" class="btn btn-dark">Submit</button>
</form>