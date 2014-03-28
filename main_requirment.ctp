<div class="col-md-12 test-link-block">
	<h2>Shop Interface Requirements</h2>
	<hr></hr>
	<br />
	<h4>Specifications: Requirements for connecting to Shopgate</h4>
	<hr></hr>
	
	
	<h4>Overview</h4>
	<hr></hr>
	<img class="img-responsive" src="<?php echo BASE_SITE_URL; ?>/img/600px-Gesamtuebersicht.png" alt="" />
	<br /><br />
	<h4>Definition of Terms</h4>
	<hr></hr>
	<ul>
		<li>
			<strong>Online Shop</strong><br /><p>This term describes a system directly operated by the merchant. It may be an online shop system but also a wide ERP system, or any other configuration. </p>
		</li>
		<li>
			<strong>Plugin</strong><br /><p>Extensions for an online shop have different names depending upon the system: plugin, module, extension, app, etc. The extension of an online shop is always referred to as a plugin here.</p>
		</li>
		<li>
			<a href="<?php echo BASE_SITE_URL; ?>"><strong>Shopgate Merchant API</strong></a><br /><p>Interface specified and offered by Shopgate for the communication between an online shop and Shopgate.</p>
		</li>
		<li>
			<a href="<?php echo BASE_SITE_URL; ?>"><strong>Shopgate Plugin API</strong></a><br /><p>An interface specified by Shopgate for the communication between an online shop and Shopgate. It must be offered by a plugin.</p>
		</li>
		<li>
			<a href="<?php echo BASE_SITE_URL; ?>"><strong>Shopgate Library</strong></a><br /><p>A PHP library to simplify plugin development. The Shopgate Library implements the Shopgate Plugin API and contains classes for the communication with the Shopgate Merchant API, the Mobile Redirect and for configuring the Connection to Shopgate.</p>
		</li>
	</ul>
	<br />
	<ul>
		<li>
			<strong>Connection to Shopgate</strong><br /><p>The term <em>Connection to Shopgate</em> means general integration of Shopgate with the systems and business processes of a merchant. The <em>plugin</em> is therefore a part of the Connection to Shopgate. In an ideal <em>Connection to Shopgate</em>, the terms plugin and <em>Connection to Shopgate</em> are synonymous. </p>
		</li>
		<li>
			<a href="<?php echo BASE_SITE_URL; ?>"><strong>Shopgate Connect</strong></a><br /><p><em>Shopgate Connect</em> describes a procedure in which final customers can register for the apps or the <em>Mobile Website</em> through their existing accounts in the online shop.</p>
		</li>
		<li>
			<strong>App(s)</strong><br /><p>Native applications for smartphone operating systems (iOS, Android, Windows Phone) are referred to in this document as apps. </p>
		</li>
		<li>
			<strong>Mobile Website</strong><br /><p>The <em>Mobile Website</em> is an internet site optimized for smartphones and offered by Shopgate to the merchants. </p>
		</li>
		<li>
			<a href="<?php echo BASE_SITE_URL; ?>"><strong>Mobile Redirect</strong></a><br /><p><em>Mobile Redirect</em> is the procedure of automatic detection of visitors using smartphones and redirecting them to the <em>Mobile Website.</em></p>
		</li>
		<li>
			<a href="<?php echo BASE_SITE_URL; ?>"><strong>Mobile Header</strong></a><br /><p><em>Mobile Header</em> is a button appearing at the head of an online shop if a visitor has disabled the <em>Mobile Redirect</em> with their smartphone. The <em>Mobile Redirect</em> function can be re-enabled with this button.</p>
		</li>
	</ul>
	<br /><br />
	<h4>Target Specifications</h4>
	<hr></hr>
	<p>
		Connecting to Shopgate should allow the merchant to use the entire range of Shopgate’s functions and to offer their products to mobile devices.
	</p>
	<p>
		Shopgate Inc. offers its customers a <em>Mobile Website</em> and native apps for popular smartphone operating systems. For this purpose, Shopgate provides its own infrastructure for products and categories as well as management of orders placed through the <em>Mobile Website</em> or apps. If a customer already has an account in a merchant’s online shop, he or she may log in through the so called <em>Shopgate Connect</em> procedure on the <em>Mobile Website</em> or through an app. A smartphone visitor on the merchant’s online shop will automatically be redirected to the <em>Mobile Website</em>. 
	</p>
	<br />
	<p><strong>Range of functions of a completed Connection to Shopgate:</strong></p>
	<ul>
		<li>Export of a stock list to Shopgate (<a href="javascript:void(0);">category export</a>, <a href="javascript:void(0);">product export</a>, <a href="javascript:void(0);">export of product reviews</a>). </li>
		<li>Import of orders placed via Shopgate into the online shop (<a href="javascript:void(0);">Import of Orders</a>). </li>
		<li>Synchronization of imported orders (i.e. synchronization of the shipping status) through the Shopgate infrastructure (<a href="javascript:void(0);">Order Synchronization</a>). </li>
		<li>Implementation of the Shopgate Connect procedure (<a href="javascript:void(0);">Shopgate Connect</a>). </li>
		<li>Re-direction to the Mobile Website (<a href="javascript:void(0);">Mobile Redirect</a>). </li>
	</ul>
	<br />
	<p>
		There are several possible approaches to the implementation of some of these functions. In the chapter <a href="javascript:void(0);">Milestones</a> you will find a more detailed description for every function. Generally, the use of the interfaces specified by Shopgate is recommended: 
	</p>
	<ul>
		<li><em>The Shopgate Plugin API</em> <span class="under">must be provided by your <em>Connection to Shopgate</em></span>. It supports export of stock products, import of orders and the <em>Shopgate Connect</em> procedure.</li>
		<li>The <em>Shopgate Merchant API</em> is provided by Shopgate and supports order synchronisation, updating of products and partial functions of the <em>Mobile Website</em> redirect functionality.</li>
	</ul>
	<p>
		For PHP implementations, we recommend using the Shopgate Library, since the special requirements and interfaces are already implemented there.
	</p>
	<br />
	<h4>Product Use</h4>
	<hr></hr>
	<p>
		The Connection to Shopgate is deployed in the online shop environment. The configuration of server systems can vary; therefore, it is important that the Connection to Shopgate runs on common configurations.
	</p>
	<br />
	<h4>Milestones</h4>
	<hr></hr>
	<p>
		Milestones comprise all operations that are directly involved in the data exchange between the concerned online shop and Shopgate. An additional milestone is the automatic redirection of customers with mobile devices to the Mobile Website.
	</p>
	<br />
	<h4>Export of Categories </h4>
	<hr></hr>
	<div class="clearfix">
		<img class="img-responsive pull-left" width="500" src="<?php echo BASE_SITE_URL; ?>/img/600px-Gesamtuebersicht.png" alt="" />
		<div class="pull-right">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="success"><strong>Ways of implementation</strong></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>Shopgate Library:</strong> <a href="javascript:void(0);">createCategoriesCsv()</a><br /><em>(recommended)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Plugin API:</strong> <a href="javascript:void(0);">get_categories_csv</a><br /><em>(recommended for Connection to Shopgate without PHP)</em></td>
					</tr>
					<tr>
						<td><strong>Manual export of CSV:</strong> <a href="javascript:void(0);">Categories CSV format</a><br /> <em>(recommended for closed systems)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Merchant API:</strong><br /> <a href="javascript:void(0);">add_category</a>, <a href="javascript:void(0);">update_category</a>, <a href="javascript:void(0);">delete_category</a><br /><em>(recommended when updating single categories)</em></td>
					</tr>
				</tbody>
			  </table>
		  </div>
	  </div>
	  
	  <p>
		<strong>Background</strong><br />Products are organized in categories within the online shops. Shopgate offers its own infrastructure for products and merchants’ categories that must be synchronized with the online shop. Please note that <span class="under">always all categories</span> have to be exported, not only updated categories! 
	  </p>
	  <p>
		<strong>Objective</strong><br />The category tree of a shop at Shopgate corresponds to the category tree in the online shop of a merchant. 
	  </p>
	  <p><strong>Procedure</strong></p>
	  <br />
	  <ol>
		<li>Shopgate calls "get_categories_csv" via cron daily (or more often, depending on the agreement with the merchant).</li>
		<li>Your plugin reads the categories of the online shop and produces a CSV file in the Shopgate format. </li>
		<li>The contents of the CSV file are returned. </li>
		<li>Shopgate imports the categories from the CSV file. </li>
	  </ol>
	  <p>
		<strong>Description</strong><br /><u>Option 1:</u><br />When using the Shopgate CSV export via <em>Shopgate Plugin API</em>, Shopgate accesses all categories and updates them in regular intervals. We recommend using the <em>Shopgate Library</em> for PHP implementations of the <em>Shopgate Plugin API</em>. 
	  </p>
	  <p>
		<u>Option 2:</u><br />Access to a CSV file can take place without the API, by regularly generating and updating a CSV file that is downloaded by Shopgate. This is an emergency solution to be used when no other options are available. 
	  </p>
	  <p>
		<u>Option 3:</u>Only minor changes should be synchronized through the <em>Shopgate Merchant API</em>, i.e. creation, deletion or update of a particular category. A complete export via the API can take a long time so export via CSV file is strongly recommended. We recommend using the <em>Shopgate Library</em> for PHP implementations of the <em>Shopgate Merchant API</em>.
	  </p>
	  <p><strong>Vital considerations:</strong></p>
	  <ul>
		<li> The field <em>url_deeplink</em> is very important for redirect customers who do not want to use the <em>Mobile Website</em> back to the correct category in the online shop.</li>
		<li> Provide pictures as large as possible for the categories &ndash; Shopgate will scale them for you.</li>
		<li> It is necessary to specify a category_number to ensure that customers are redirected to the exact same category on the mobile website.</li>
	  </ul>
	  
	  
	  
	<br />
	<h4>Export of Products</h4>
	<hr></hr>
	<div class="clearfix">
		<img class="img-responsive pull-left" width="500" src="<?php echo BASE_SITE_URL; ?>/img/600px-Gesamtuebersicht.png" alt="" />
		<div class="pull-right">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="success"><strong>Ways of implementation</strong></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>Shopgate Library:</strong> <a href="javascript:void(0);">createItemsCsv()</a><br /><em>(recommended)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Plugin API:</strong> <a href="javascript:void(0);">get_items_csv</a><br /><em>(recommended for Connection to Shopgate without PHP)</em></td>
					</tr>
					<tr>
						<td><strong>Manual export of CSV:</strong> <a href="javascript:void(0);">Product CSV format</a><br /> <em>(recommended for closed systems)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Merchant API:</strong><br /> <a href="javascript:void(0);">add_item</a>, <a href="javascript:void(0);">update_item</a>, <a href="javascript:void(0);">delete_item</a><br /><em>(recommended when updating single categories)</em></td>
					</tr>
				</tbody>
			  </table>
		  </div>
	</div>
	<p>
		<strong>Background</strong><br />The online shop contains products offered by merchants. These products must be synchronized with the Shopgate infrastructure in order to appear in the <em>Mobile Website</em> and the native apps as well. Please note that <u>always all products</u> have to be exported, not only updated products!
	</p>
	<p>
		<strong>Objective</strong><br />The product offer in Shopgate corresponds to the product offer in the merchant’s online shop. 
	</p>
	<p><strong>Procedure</strong></p>
	<ol>
		<li> Shopgate calls "get_items_csv" via cron daily (or more often, depending on the agreement with the merchant).</li>
		<li> Your plugin reads the products of the online shop and produces a CSV file in the Shopgate format.</li>
		<li> The contents of the CSV file are returned.</li>
		<li> Shopgate imports the products from the CSV file.</li>
	</ol>
	<p> 
		<strong>Description</strong><br /><u>Option 1:</u>When using the Shopgate CSV export via <em>Shopgate Plugin API</em>, Shopgate accesses all products and updates them in regular intervals. Should the CSV file take too long to be created due to a large number of products, the export can also be performed in several smaller steps. If the parameters limit and offset are set in the API call, the number of returned products must not exceed the value in the field limit. Products export must start from the consecutive number indicated in the field offset (incl.). First retrieval always starts at offset 0. We recommend using the <em>Shopgate Library</em> for PHP implementations of the <em>Shopgate Plugin API</em>.
	</p>
	<p>
		<u>Option 2:</u><br />Access to a CSV file can take place without the API, by regularly generating and updating a CSV file that is downloaded by Shopgate. This is an emergency solution to be used only when no other option is available.  
	</p>
	<p>
		<u>Option 3:</u><br />Only minor changes should be synchronized through the <em>Shopgate Merchant API</em>, i.e. creation, deletion or update of a particular product. A complete export via the API can take a long time so export via CSV file is strongly recommended. We recommend using the <em>Shopgate Library</em> for PHP implementations of the <em>Shopgate Merchant API</em>.
	</p>
	<p><em>You will find additional links to individual approaches on the right side, in the “Ways of implementation” box.</em></p> 
	<p><strong>Vital considerations:</strong><p>
	<ul>
		<li> The field <em>url_deeplink</em> is very important in order to redirect customers who do not want to use the Mobile Website back to the correct product page in the online shop.</li>
		<li> You can provide us information about the current stock in the stock field. <u>If this field's value is 0, the product will be disabled.</u>.</li>
		<li> Provide pictures of products as large as possible in the field <em>urls_images</em> &ndash; Shopgate will scale them for you.</li>
		<li> <em>ean</em>, <em>isbn</em> or <em>pzn</em> help the customers to find products quickly through the search function or using the barcode scanner. Product search functionality is essential in the area of mobile shopping.</li>
		<li> To further support keyword searching, specify a lot of matching <em>tags</em>.</li>
		<li> Thematically related articles included in the <em>related_shop_item_numbers</em> field allow Shopgate to present a better overview of the shop's product range to customers. This significantly improves the quality of your offering.</li>
	</ul>
	
	
	
	
	<br />
	<h4>Export of Product Reviews </h4>
	<hr></hr>
	<div class="clearfix">
		<img class="img-responsive pull-left" width="500" src="<?php echo BASE_SITE_URL; ?>/img/600px-Gesamtuebersicht.png" alt="" />
		<div class="pull-right">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="success"><strong>Ways of implementation</strong></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>Shopgate Library:</strong> <a href="javascript:void(0);">createReviewsCsv()</a><br /><em>(recommended)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Plugin API:</strong> <a href="javascript:void(0);">get_reviews_csv</a><br /><em>(recommended for Connection to Shopgate without PHP)</em></td>
					</tr>
					<tr>
						<td><strong>Manual export of CSV:</strong> <a href="javascript:void(0);">Product reviews CSV format</a><br /> <em>(recommended for closed systems)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Merchant API:</strong><br /> <a href="javascript:void(0);">add_item</a>, <a href="javascript:void(0);">update_item</a>, <a href="javascript:void(0);">delete_item</a><br /><em>(recommended when updating single categories)</em></td>
					</tr>
				</tbody>
			  </table>
		  </div>
	</div>
	
	<p><strong>Background</strong><br /> Online shops offer points and comments based systems for their customers to review products. Please note that <u>always all product reviews</u> have to be exported, not only updated product reviews! </p>
	
	<p><strong>Objective</strong><br />The product reviews from the online shop correspond to the product reviews at Shopgate. </p>
	<p><strong>Procedure</strong><p>
	<ol>
		<li> Shopgate calls "get_items_csv" via cron daily (or more often, depending on the agreement with the merchant).</li>
		<li> Your plugin reads the reviews of the online shop and produces a CSV file in the Shopgate format.</li>
		<li> The contents of the CSV file are returned.</li>
		<li> Shopgate imports the reviews from the CSV file.</li>
	</ol>	
	<p>
		<strong>Description</strong><br /><u>Option 1:</u><br />When using the Shopgate CSV export via<em> Shopgate Plugin API</em>, Shopgate accesses all products and updates them in regular intervals. We recommend using the <em>Shopgate Library</em> for PHP implementations of the <em>Shopgate Plugin API</em>. 
	</p>	
	<p>
		<u>Option 2:</u><br />Access to a CSV file can take place without the API, by regularly generating and updating a CSV file that is downloaded by Shopgate. This is an emergency solution to be used only when no other option is available. 
	</p>
	<p>
		<em>You will find additional links to the individual approaches on the right side, in the “Ways of implementation” box.</em>
	</p>
	
	<br />
	<h4>Shopgate Connect </h4>
	<hr></hr>
	<div class="clearfix">
		<img class="img-responsive pull-left" width="500" src="<?php echo BASE_SITE_URL; ?>/img/600px-Gesamtuebersicht.png" alt="" />
		<div class="pull-right">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="success"><strong>Ways of implementation</strong></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>Shopgate Library:</strong> <a href="javascript:void(0);">getCustomer()</a><br /><em>(recommended)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Plugin API:</strong> <a href="javascript:void(0);">get_customer</a><br /><em>(recommended for Connection to Shopgate without PHP)</em></td>
					</tr>
				</tbody>
			  </table>
		  </div>
	</div>
	<p>
		<strong>Background</strong><br>Customers who already have an account in an online shop can use it to register in native apps or on the Mobile Website, too.
	</p>
	<p><strong>Objective</strong><br>Customers are able to register in the apps and on the Mobile Website using their online shop credentials. The plugin returns the user's details (invoice and delivery addresses etc.) for synchronization Shopgate. Orders placed by a customer who registered via <em>Shopgate Connect</em> are automatically assigned to the customer's user account in the online shop. If the login fails, an error message is returned to Shopgate.</p>
	<p><strong>Procedure</strong></p>
	<ol>
		<li> The user registers via the app or the Mobile Website using his existing online shop credentials.</li>
		<li> The user enters login and password.</li>
		<li> Shopgate calls the action get_customer with the login data.</li>
		<li> Your plugin tries to authenticate the customer in the online shop.</li>
		<li> If the authentication succeeds, the module returns the customer's details to Shopgate.</li>
		<li> A quick and easy registration of the customer is made possible by using the customer's details.</li>
	</ol>
	<p>
		<strong>Description</strong><br>The <em>Shopgate Connect</em> procedure can only be implemented via <em>Shopgate Plugin API</em>. We recommend using the <em>Shopgate Library</em> for PHP implementations of the <em>Shopgate Plugin API</em>.
	</p>
	<p>
		<em>You will find additional links to the individual approaches on the right side, in the “Ways of implementation” box.</em>
	</p>
	<p><strong>Vital considerations:</strong></p>
	<ul>
		<li> Make sure that the default address is returned first as it will also be offered to the customer as the default address. If the customer has to choose the correct address during checkout, that can cause a termination of the process &ndash; the checkout procedure should be as quick and comfortable as possible.</li>
		<li> Incoming requests must be logged. While doing so, ensure that the password will be blacked out when the <em>get_customer</em> action is called, in order to provide security for customers. The <em>Shopgate Library</em> executes the logging and blacks out the password when calling the <em>get_customer</em> action automatically.</li>
		<li> The use of an encrypted SSL connection is a requirement for the use of the <em>Shopgate Connect</em> procedure and in the interest of the customers.</li>
	</ul>
	
	<br />
	<h4>Registering Customers</h4>
	<hr></hr>
	<div class="clearfix">
		<p class="pull-left col-md-7">
			<strong>Background</strong><br>Customers who already have an account in an online shop can use it to register in native apps or on the Mobile Website, too.
		</p>
		<div class="pull-right col-md-5">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="success"><strong>Ways of implementation</strong></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>Shopgate Library:</strong> <a href="javascript:void(0);">registerCustomer()</a><br /><em>(recommended)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Plugin API:</strong> <a href="javascript:void(0);">register_customer</a><br /><em>(recommended for Connection to Shopgate without PHP)</em></td>
					</tr>
				</tbody>
			  </table>
		  </div>
	</div>
	<br />
	<h4>Synchronizing Carts</h4>
	<hr></hr>
	<div class="clearfix">
		<div  class="pull-left col-md-7">
			<p>
				<strong>Background</strong><br>The synchronization of a customer's shopping cart allows real-time validation of coupons, product relations, (e.g. product A can only be bought along with product B) and to calculate price models for shipping and handling during checkout.
			</p>
			<p>
				<em><u>Note:</u> Currently, the synchronization only supports the validation of coupons.</em>
			</p>
		</div>
		<div class="pull-right col-md-5">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="success"><strong>Ways of implementation</strong></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>Shopgate Library:</strong> <a href="javascript:void(0);">registerCustomer()</a><br /><em>(recommended)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Plugin API:</strong> <a href="javascript:void(0);">register_customer</a><br /><em>(recommended for Connection to Shopgate without PHP)</em> </td>
					</tr>
				</tbody>
			  </table>
		</div>
	</div>
	<p>
		<strong>Objective</strong><br>Customers receive real-time feedback about the contents of their shopping carts.
	</p>
	<p><br><strong>Procedure</strong></p>
	<ol>
		<li> The customer adds a product to the cart (<em>or:</em> removes a product from the cart, changes quantities, adds a coupon, removes a coupon).</li>
		<li> Shopgate calls the check_cart action with the contents of the cart.</li>
		<li> Your plugin validates the contents of the cart and returns a response to the customer according to the result.</li>
		<li> If the cart is okay, the customer will not receive a message.</li>
		<li> If the validation is unsucessful, the customer will receive your returned error message.</li>
	</ol>
	<p>
		<strong>Description</strong><br>The <em>check_cart</em> action can only be implemented via <em>Shopgate Plugin API</em>. We recommend using the <em>Shopgate Library</em> for PHP implementations of the <em>Shopgate Plugin API</em>. <em>You will find additional links to the individual approaches on the right side, in the “Ways of implementation” box.</em>
	</p>
	<p><strong>Vital considerations:</strong></p>
	<ul>
		<li> Please note that only "external coupons" can be validated by your plugin. The validation of "Shopgate coupons" will be done by Shopgate.</li>
		<li> Provide a detailed message in the correct language (same as the language for export of products) so the customer knows what went wrong.</li>
	</ul>
	<br />
	<h4>Redeeming Coupons </h4>
	<hr></hr>
	<div class="clearfix">
		<div  class="pull-left col-md-7">
			<p>
				<strong>Background</strong><br>It takes about 2 to 5 minutes until the order is imported into the shopping system, when a customer checks out at Shopgate. However, during this time a coupon can become invalid. Especially, if the coupon is only valid for one day or if the order was placed right before midnight. In order to prevent this from happening, the coupon must be reserved right before checkout. 
			</p>
		</div>
		<div class="pull-right col-md-5">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="success"><strong>Ways of implementation</strong></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>Shopgate Library:</strong> <a href="javascript:void(0);">redeemCoupons()</a><br /><em>(recommended)</em></td>
					</tr>
					<tr>
						<td><strong>Shopgate Plugin API:</strong> <a href="javascript:void(0);">redeem_coupons</a><br /><em>(recommended for Connection to Shopgate without PHP)</em> </td>
					</tr>
				</tbody>
			  </table>
		</div>
	</div>
	<p>
		<strong>Objective</strong><br>When a customer checks out their coupon is validated and reserved. If the coupon is not valid, the customer receives a failure message.
	</p>
	<p><strong>Procedure</strong></p>
	<ol>
		<li> The customer completes the checkout.</li>
		<li> Shopgate calls the redeem_coupons action with the contents of the cart.</li>
		<li> Your plugin validates the contents of the cart and returns a response to the customer according to the result.</li>
		<li> If the cart is okay, the customer will receive a message that the checkout was successful and the order will be placed.</li>
		<li> If the validation is unsuccessful, the customer will receive a returned error message and the order will not be placed.</li>
	</ol>
	<p>
		<strong>Description</strong><br>The <em>redeem_coupons</em> action can only be implemented via <em>Shopgate Plugin API</em>. We recommend using the <em>Shopgate Library</em> for PHP implementations of the <em>Shopgate Plugin API</em>.
	</p>
	<p>
		<em>You will find additional links to the individual approaches on the right side, in the “Ways of implementation” box.</em>
	</p>
	<p><strong>Vital considerations:</strong></p>
	<ul>
		<li> Please note that only "external coupons" can be validated by your plugin. The validation of "Shopgate coupons" will be done by Shopgate.</li>
		<li> Provide a detailed message in the correct language (same as the language for export of products) so the customer knows what went wrong.</li>
	</ul>
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>