<?php
if(!isset($_SESSION['step'][3])){
	redirect("?p=submission_form&s=colour");
}

// array to store validation messages
$missing = array();

if(isset($_POST['btn1']) || isset($_POST['btn2'])){

	if(isset($_POST['btn1'])){
		unset($_POST['btn1']);
		$url = "?p=submission_form&s=colour";
	} elseif (isset($_POST['btn2'])){
		unset($_POST['btn2']);
		
		if(!isset($_POST['search_engine'])){
			$missing['search_engine'] = $required['search_engine'];
		
		}
		
		$url = "?p=submission_form&s=summary";
	}

	if(empty($missing)){
		post2session();
		$SESSION['step'][4] = 4;
		if(isset($url)){
			redirect($url);
		}
	
	}
	
	}
	
require_once("_tmp_header.php");
?>

<h1>Search Engine</h1>
<p>What&acute;s your favorite search engine?</p>
<div class="dev br_ts">&nbsp;</div>
<form action="" method=""post">
<?php echo isValid('search_engine', $missing); ?>
<table cellpadding="0" cellspacing="0" border="0" class="tbl_insert">
	<tr>
		<th>
			<?php echo getSearchEngine('search_engine'); ?>		
		</th>
	</tr>
	<tr>
		<th>
			<div class="dev">&nbsp;</div>
			
			<label for="btn1" class="sbm btn_standard sbm_previous fl_lmr_r10">
				<input type="submit" id="btn1" name="btn1" class="sbm btn_standard" value="Previous" />
			</label>
			
			<label for="btn2" class="sbm btn_standard sbm_next fl_lmr_r10">
				<input type="submit" id="btn2" name="btn2" class="sbm btn_standard" value="Next" />
			</label>

		</th>
	</tr>
</table>
</form>




<?php
require_once("_tmp_footer.php");
?>