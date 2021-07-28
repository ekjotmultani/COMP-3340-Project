<!-- 3340 Group Project Team 15 -->

<!DOCTYPE html>
<html>
<title>Admin Controls</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">

<body>


<div class="side-menu">
	<div class="brand-name">
	
		<h1>New World Artistry</h1>
		
	</div>
	
	<!-- Add a list for the side bar  -->
	
	<ul>
		<li><img src="icon.png" alt=""> <span> &nbsp; Dashboard</span>  </li>
		<li><img src="icon.png" alt=""> <span> &nbsp; Locations</span> </li>
		<li><img src="icon.png" alt=""> <span> &nbsp; Sales by Age</span> </li>
		<li><img src="icon.png" alt=""> <span> &nbsp; Monthly Stats</span> </li>
		<li><img src="icon.png" alt=""> <span> &nbsp; Yearly Stats</span> </li>
		<li><img src="icon.png" alt=""> <span> &nbsp; Most Popular</span> </li>		
	</ul>
</div>


<div class="container">
	<div class="header">
		<div class="nav">
		
			<!-- Add a search bar -->

			<div class="search">

				<input type="text" placeholder="Search">
				<button type="submit">
				<a href="#"> <img src="search.png" alt="submit button"></button></a>
			</div>
			
			<!-- Add a "Add New" button and a user icon on the top right -->
			
			<div class="user">
			
				<a href="#" class="btn"> Add New </a>
				
				<a href="#"> 
					<img src="user.png" alt="">
				</a>
				
				<div class="img-case">
				
				</div>
			</div>
		</div>	
	</div>
	
	<!-- Add "cards" that display the most important information in a clear, colourful way -->
	
	<div class="content">
		<div class="cards">
			<div class="card">
			
				<div class="box">
					<h2>2194</h2>
					<h3>Current Online Users</h3>
				</div>
				
				<div class="icon-case">
					<img src="icon.png" alt="">		
				</div>
			</div>
			
			<div class="card">
			
				<div class="box">
					<h2>$168,995.49</h2>
					<h3>Monthly Sales</h3>
				</div>
				
				<div class="icon-case">
					<img src="icon.png" alt="">		
				</div>
			</div>
			
			<div class="card">
			
				<div class="box">
					<h2>$1,048,529.88</h2>
					<h3>Yearly Sales</h3>
				</div>
				
				<div class="icon-case">
					<img src="icon.png" alt="">		
				</div>
			</div>
			
			<div class="card">
			
				<div class="box">
					<h2>82</h2>
					<h3>Pending Sales</h3>
				</div>
				
				<div class="icon-case">
					<img src="icon.png" alt="">		
				</div>
			</div>

		</div>

		<!-- Add tables that display the most recent purchases and the most recent items added, with a "View All" button -->

		<div class="content-2">
		
			<div class="recent-payments">
			
			<div class="title">
				<h2>Recent Purchases</h2>
				<a href="#" class="btn">View All</a>
			</div>
			
			<table>
			
				<tr>
					<th>Customer</th>
					<th>E-mail</th>
					<th>Purchase Total</th>
				</tr>
			
				<tr>
					<td>Jason Jackson</td>
					<td>jjackson<wbr>@email.com</td>
					<td>$258.99</td>
				</tr>
			
				<tr>
					<td>Valery Kaloyanchev</td>
					<td>kaloyanchev<wbr>@email.com</td>
					<td>$454.65</td>
				</tr>
			
				<tr>
					<td>Josefine Sheelagh</td>
					<td>thejosefine<wbr>@email.com</td>
					<td>$651.05</td>
				</tr>
			
				<tr>
					<td>Kyriaki Horvat</td>
					<td>haventheking<wbr>@email.com</td>
					<td>$89.45</td>
				</tr>
			
			</table>	
			</div>		
			
			<div class="new-items">
			
				<div class="title">
					<h2>New Items</h2>
					<a href="#" class="btn">View All</a>
				</div>
				
			<table>
			
				<tr>
					<th>Name</th>
					<th>Artist</th>
					<th>Price</th>
				</tr>
			
				<tr>
					<td>Floating Through Air</td>
					<td>Michal Zoric</td>
					<td>$124.65</td>
				</tr>
			
				<tr>
					<td>Life is a Box</td>
					<td>Elna Langbroek</td>
					<td>$89.98</td>
				</tr>
			
				<tr>
					<td>Steamed Rice and Chocolate</td>
					<td>Pascal Boone</td>
					<td>$243.15</td>
				</tr>
			
				<tr>
					<td>Under the Fan</td>
					<td>Ilja Warshawsky</td>
					<td>$79.96</td>
				</tr>
			
			</table>

			</div>		
		</div>
	</div>
</div>	


</body>
</html>