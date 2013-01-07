<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		 <?php //$this->widget('zii.widgets.CMenu',array(
			// 'items'=>array(
				// array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
				// array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
				// array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
				// array('url' => Yii::app()->getModule('message')->inboxUrl,
					// 'label' => 'Messages' .
					    // (Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) ?
						// ' (' . Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) . ')' :
						// ''),
					// 'visible' => !Yii::app()->user->isGuest),
				// array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
				
				// ),
		// )); ?>
	</div><!-- mainmenu -->
	<div id="mainmenu">
	
	<?php 
			$this->widget('application.extensions.mbmenu.MbMenu',array( 
				'items'=>array( 
					array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest), 
					array('label'=>'Sales & Customer', 'visible'=>!Yii::app()->user->isGuest,
						'items'=>array( 
							array('label'=>'Sales Quotation', 'url'=>array('/salesquotation/admin')), 						
							array('label'=>'Sales Order', 'url'=>array('/salesorder/admin')), 						
							array('label'=>'Sales Transaction', 'url'=>array('/salestransaction/admin')),								
							array('label'=>'- Direct Delivery'), 
							array('label'=>'- Direct Invoice'), 
							array('label'=>'- Delivery vs Sales Order'), 
							array('label'=>'- Invoice vs Sales Delivery'), 									
							//array('label'=>'Sales Group', 'url'=>array('/salesgroup/admin')),
							array('label'=>'Sales Type', 'url'=>array('/salestype/admin')),
							array('label'=>'Sales Person', 'url'=>array('/salesperson/admin')),
							array('label'=>'Sales Price', 'url'=>array('/salestype/admin')), 
							array('label'=>'Customer Head Info', 'url'=>array('/customerheadinformation/admin')), 
							array('label'=>'Customer Branch Info', 'url'=>array('/customerbranchinformation/admin')),  
							array('label'=>'Customer Branch Account', 'url'=>array('/customerbranchaccount/admin')), 
						), 
					),
					
					array('label'=>'Purchase & Supplier', 'visible'=>!Yii::app()->user->isGuest,
						'items'=>array( 
							array('label'=>'- Allocate Supplier Payment or Credit Note'), 						
							array('label'=>'- Supplier Credit Note'), 						
							array('label'=>'- Supplier Invoice'), 						
							array('label'=>'Purchase Price', 'url'=>array('/purchaseprice/admin')),  						
							array('label'=>'- Purchase Order'), 						
							array('label'=>'Supplier Info', 'url'=>array('/supplierinformation/admin')),  						
							array('label'=>'Supplier Account', 'url'=>array('/supplieraccount/admin')),  						
							array('label'=>'- Supplier Transaction'), 						
							array('label'=>'- Supplier Purchase Order'), 						
							array('label'=>'- Supplier Payment'), 						
							array('label'=>'- Supplier Allocation'), 						
						), 
					),
					
					array('label'=>'Item & Inventory', 'url'=>array('/item'), 'visible'=>!Yii::app()->user->isGuest, 
						'items'=>array(  						
							array('label'=>'###'), 						
							array('label'=>'###'), 						
							array('label'=>'###'), 						
							array('label'=>'Item Info', 'url'=>array('/iteminformation/admin')),
							array('label'=>'Item Account', 'url'=>array('/ItemAccount/admin')),
							array('label'=>'Item Cost', 'url'=>array('/ItemCost/admin')),
							array('label'=>'- Item Transaction'), 						
							array('label'=>'- Item Status'), 
							array('label'=>'Item Category Info', 'url'=>array('/ItemCategoryInformation/admin')),
							array('label'=>'Item Category Account', 'url'=>array('/ItemCategoryAccount/admin')),
							array('label'=>'- Sales Kit'), 						
							array('label'=>'Inventory Location', 'url'=>array('/InventoryLocation/admin')),
							array('label'=>'Sales Price', 'url'=>array('/SalesPrice/admin')),
							array('label'=>'Purchase Price', 'url'=>array('/PurchasePrice/admin')),
						), 
					),
					
					array('label'=>'Manufacture', 'url'=>array('/manufacture'), 'visible'=>!Yii::app()->user->isGuest, 
						'items'=>array( 
							array('label'=>'###'), 						
							array('label'=>'###'), 						
							array('label'=>'###'),						
						), 
					),
					
					array('label'=>'Banking & General Ledger', 'url'=>array('/bgl'), 'visible'=>!Yii::app()->user->isGuest, 
						'items'=>array(  						
							array('label'=>'Bank Account', 'url'=>array('/BankAccount/admin')),
							array('label'=>'###'), 						
							array('label'=>'Quick Entry', 'url'=>array('/QuickEntry/admin')),
							array('label'=>'Quick Entry Line', 'url'=>array('/QuickEntryLine/admin')),
							array('label'=>'General Ledger Account', 'url'=>array('/GeneralLedgerAccount/admin')),
							array('label'=>'GL Account Tag', 'url'=>array('/GeneralLedgerAccountTag/admin')),
							array('label'=>'GL Account Type', 'url'=>array('/GeneralLedgerAccountType/admin')),
							array('label'=>'GL Account Class', 'url'=>array('/GeneralLedgerAccountClass/admin')),
							), 
					),
					
					array('label'=>'Misc', 'url'=>array('/misc'), 'visible'=>!Yii::app()->user->isGuest, 
					  'items'=>array( 
						array('label'=>'Area', 'url'=>array('/Area/admin')),
						array('label'=>'Measure Unit', 'url'=>array('/MeasureUnit/admin')),
						array('label'=>'Workcenter', 'url'=>array('/Workcenter/admin')),
						array('label'=>'Dimension', 'url'=>array('/Dimension/admin')),
						array('label'=>'Dimension Tag', 'url'=>array('/DimensionTag/admin')),
						array('label'=>'Currency', 'url'=>array('/Currency/admin')),
						array('label'=>'Exchange Rate', 'url'=>array('/ExchangeRate/admin')),
						array('label'=>'Shipping Company', 'url'=>array('/ShippingCompany/admin')),
						array('label'=>'Payment Term', 'url'=>array('/PaymentTerm/admin')),
						array('label'=>'Contact Category', 'url'=>array('/ContactCategory/admin')),
						array('label'=>'Tax Group', 'url'=>array('/TaxGroup/admin')),
						array('label'=>'Tax Type', 'url'=>array('/TaxType/admin')),
						array('label'=>'Tax Type Item', 'url'=>array('/TaxTypeItem/admin')),
						array('label'=>'Fiscal Year', 'url'=>array('/FiscalYear/admin')),
						array('label'=>'Attachment', 'url'=>array('/Attachment/admin')),
						array('label'=>'Form', 'url'=>array('/Form/admin')),
					  ), 
					),				
					
					array('label'=>'Setup', 'visible'=>!Yii::app()->user->isGuest, 
						'items'=>array(  						
							array('label'=>'Printer', 'url'=>array('/Printer/admin')),
							array('label'=>'Decimal Display Setting', 'url'=>array('/DecimalDisplaySetting/admin')),
							array('label'=>'Date Display Setting', 'url'=>array('/DateDisplaySetting/admin')),
							array('label'=>'Other Display Setting', 'url'=>array('/OtherDisplaySetting/admin')),
							array('label'=>'###'), 							
							),  
					),
					
					// array('label'=>'Manage User', 'visible'=>!Yii::app()->user->isGuest, 
						// 'items'=>array(  						
							// array('label'=>'Profile', 'url'=>array('/user/profile')),
							// array('label'=>'Messages', 'url'=>array('/message/inbox')),
							// ),  
					// ), 
					// array('label'=>'Logout('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest),													
					// array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest), 
					// array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest), 
					// array('label'=>'Register', 'url'=>array('/user/registration'), 'visible'=>Yii::app()->user->isGuest), 
					array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
					array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
					array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
					array('url' => Yii::app()->getModule('message')->inboxUrl,
						 'label' => 'Messages' // .	(Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId())?
						// ' (' . Yii::app()->getModule('message')->getCountUnreadedMessages(Yii::app()->user->getId()) . ')' :''),
						,'visible' => !Yii::app()->user->isGuest),
					array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
				
				), 
			)); 
		?> 

	</div><!-- submenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
