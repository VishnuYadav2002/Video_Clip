<?php

$page_title = "Videos";

require_once ('includes/header.php');
require_once ('includes/database.php');

//select statement
$query_str = "SELECT * FROM clip";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}else { //display results in a table
	?>
	<div class="container wrapper">

		<ul class="breadcrumb">
			<li><a href="home.php">Home</a></li>
			<li class="active">videos</li>
		</ul>

		<h1 class="text-center">videos</h1>

		<div class="row">
			<div class="col-xs-4 col-xs-offset-8">
				<form action="videoSearch.php" method="get" class="form-inline search-form" role="form">
					<div class="input-group">
						<label class="sr-only" for="videoSearch"> Search video </label>
						<div class="input-group-addon"><i class="fa fa-search fa-lg"></i></div>
						<input type="text" name="clip" placeholder="Search" id="clipSearch" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary">Go!</button>
				</form>
			</div>
		</div>
		<br><br>
		<div class="video-list">
			<?php
			$i = 0;
			while ( $result_row = $result->fetch_assoc() ) :
				$i++;
				if ($i == 1) :
					?>
					<div class="row">
				<?php endif; ?>
			
						<div class="container">
							<div class="text-center">
									<a href="<?php echo $result_row['clip_path'] ?>">
									<video src="<?php echo $result_row['clip_path'] ?>" type=video/mp4 ></video> 
								</a>
							</div>
							<h3 class="text-center">
								<?php
								echo   $result_row['clip_name'];
								?>
							</h3>
						</div>
				
				<?php if ($i == 3) : ?>
				</div>
				<?php $i=0; endif; endwhile; ?>
		</div>
	</div>






<?php
	// clean up result sets when we're done with them!
	$result->close();
}

// close the connection.
$conn->close();

include ('includes/footer.php');
?>