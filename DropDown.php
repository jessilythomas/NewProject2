<?php
include 'dbConfig.php';
$query=$db->query("select * from tbl_countries");
$rowCount=$query->num_rows;
?>

<form method="POST" action="">
<select id="country" width="20">
	<option value="">Select Country</option>
<?php
	if($rowCount>0)
	{
		while ($row=$query->fetch_assoc()) {
			
			echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
		}
	}
	else{
		echo '<option value="">Country not available</option>';
	}
?>
 </select>

 <select id="state">
    <option value="">Select country first</option>
</select>

<select id="city">
    <option value="">Select state first</option>
</select>
<button type="submit" name="submit" >Submit</button>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
    $('#country').on('change',function()
    {
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }
        else
        {
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function()
    {
        var stateID = $(this).val();
        if(stateID)
        {
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }
        else
        {
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
