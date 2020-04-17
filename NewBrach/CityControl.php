<?
include_once("config.php");
$CountryId 		  =$_REQUEST['CountryId'];  
$CompanyId 		  =$_REQUEST['CompanyId'];  
$rsCity=LoadCityX($CountryId);

?>

  <select name="CityId" id="CityId"  onchange="Cus_LoadCompany($(this).val(),$('#colshowCompanyforCombine'),'<?=$CompanyId?>');">
   <option value="">---------SELECT-------</option>
        <? foreach($rsCity as $rowCi){ 
			?>
			<option value="<?=$rowCi->CityId?>"><?=$rowCi->City?></option>
		<? } ?>
  </select>


<?

 function LoadCityX($CountryId)
 {
	 global $db;
	$sql="SELECT CityId,City FROM tbCity  WHERE  1=1 AND CountryId ='$CountryId' ORDER BY City"; 
	//print "<pre>$sql";
	try{
				$rs= $db->fetchAll($sql);
				
				return $rs;
			}catch(Exception $e)	
			{
				print $e -> getMessage()."<pre> $sql Error Line ".__LINE__." with function ".__FUNCTION__;
			}
 }
 
?>