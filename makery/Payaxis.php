<?php 
/* Template Name: Payaxis	 */
session_start();
get_header(); 
		global $woocommerce;

        // $customer_order = new WC_Order($order_id);
		// $_TxnRefNumber = "Woo". date('YmdHis');
		
		// $_AmountTmp = $customer_order->order_total*100;
		// $_AmtSplitArray = explode('.', $_AmountTmp);
		// $_FormattedAmount = $_AmtSplitArray[0];
		// $post_url = "http://basmah/CustomerPortal/transactionmanagement/merchantform";
		// $ExpiryTime = date('YmdHis', strtotime("+".$this->pp_ExpiryDays." days"));
		// $TXN_DateTime = date('YmdHis');
		// $Bill_Reference = str_replace("#", "", $customer_order->get_order_number());
		
		$customer_order=$_SESSION['customer_order'];
		$_TxnRefNumber=$_SESSION['_TxnRefNumber'];
		$_FormattedAmount=$_SESSION['_FormattedAmount'];
		$ExpiryTime=$_SESSION['ExpiryTime'];	
		$post_url=$_SESSION['post_url'];
		$TXN_DateTime=$_SESSION['TXN_DateTime'];
		$Bill_Reference=$_SESSION['Bill_Reference'];
		$pp_version = $_SESSION['pp_version'];
		$pp_language = $_SESSION['pp_language'];
		$pp_merchantid = $_SESSION['pp_merchantid'];
		$pp_password = $_SESSION['pp_password'];
		$pp_txncurrency = $_SESSION['pp_txncurrency'];
		$pp_returnurl = $_SESSION['pp_returnurl'];
		$pp_securehash = $_SESSION['pp_securehash'];		$product_name=$_SESSION['pp_Description'];			//Calculating Hash		$SortedArrayOld =$pp_securehash.'&'.$_FormattedAmount.'&'.$Bill_Reference.'&'.$product_name.'&'.$pp_language.'&'.$pp_merchantid.'&'.$pp_password.'&'.$pp_returnurl.'&'.$pp_txncurrency.'&'.$TXN_DateTime.'&'.$ExpiryTime.'&'.$_TxnRefNumber.'&'.$pp_version.'&'.'1'.'&'.'2'.'&'.'3'.'&'.'4'.'&'.'5';		$pp_securehash = hash_hmac('sha256', $SortedArrayOld, $pp_securehash);
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<form id="postform" name="PayAxisForm" method="post" action="<?php echo $post_url ?>">
                <input type="hidden" name="pp_Version" value="<?php echo $pp_version ?>">
                <input type="hidden" name="pp_TxnType" value="">
                <input type="hidden" name="pp_Language" value="<?php echo $pp_language?>">			
				<input type="hidden" name="pp_MerchantID" value="<?php echo $pp_merchantid?>">
				<input type="hidden" name="pp_SubMerchantID" value="">
				<input type="hidden" name="pp_Password" value="<?php echo $pp_password?>">
				<input type="hidden" name="pp_BankID" value="">
				<input type="hidden" name="pp_ProductID" value="">
				<input type="hidden" name="pp_TxnRefNo" value="<?php echo $_TxnRefNumber?>">
				<input type="hidden" name="pp_Amount" value="<?php echo $_FormattedAmount?>">
				<input type="hidden" name="pp_TxnCurrency" value="<?php echo $pp_txncurrency?>">	
				<input type="hidden" name="pp_TxnDateTime" value="<?php echo $TXN_DateTime?>">
				<input type="hidden" name="pp_BillReference" value="<?php echo $Bill_Reference?>">
				<input type="hidden" name="pp_Description" value="<?php echo $product_name ?>">
				<input type="hidden" name="pp_TxnExpiryDateTime" value="<?php echo $ExpiryTime?>">
				<input type="hidden" name="pp_ReturnURL" value="<?php echo $pp_returnurl?>">
				<input type="hidden" name="pp_SecureHash" value="<?php echo $pp_securehash?>">
				<input type="hidden" name="ppmpf_1" value="1">
				<input type="hidden" name="ppmpf_2" value="2">
				<input type="hidden" name="ppmpf_3" value="3">
				<input type="hidden" name="ppmpf_4" value="4">
				<input type="hidden" name="ppmpf_5" value="5">
				</form>
            
			<script language="JavaScript">
			document.PayAxisForm.submit();
			function submitForm()
			{
				document.PayAxisForm.submit();
			}
			</script>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


