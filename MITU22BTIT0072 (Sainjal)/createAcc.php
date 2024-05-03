<!DOCTYPE html>
<html>

<head>
	<title>GeeksforGeeks Registration</title>
	<link rel="stylesheet"
		href="login.css">
</head>

<body>
	<div class="main">
		<h1>Fanta</h1>
		<h3>Create Account in Fanta</h3>
		<form action="">
			<label for="first">
				Username:
			</label>
			<input type="text"
				id="first"
				name="first"
				placeholder="Enter your Username" required>

			<label for="password">
				Password:
			</label>
			<input type="password"
				id="password"
				name="password"
				placeholder="Enter your Password" required>

			<div class="wrap">
				<button type="submit"
						onclick="solve()">
					Submit
				</button>
			</div>
		</form>
		<p>Create Account 
			<a href="login.html"
			style="text-decoration: none;">
				back to login
			</a>
		</p>
	</div>
</body>

</html>
