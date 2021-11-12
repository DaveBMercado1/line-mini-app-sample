<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<title>Title</title>
	</head>
	<body>
		<div id="mainDiv">
			<div class="container text-center my-5" id="userDetails">
				<img src="" id="profilePic" class="mx-auto mb-3 d-block" style="border-radius: 50%; width: 200px;">
				<h2 id="welcome"></h2>
				<p id="statusMessage"></p>
			</div>

			<div class="container text-center my-5 w-50" id="actions">
				<div class="vstack gap-3">
					<button type="button" class="btn btn-primary btn-lg">Reservation</button>
					<button type="button" class="btn btn-primary btn-lg">Survey</button>
					<button type="button" class="btn btn-primary btn-lg">Mobile Order</button>
				</div>
			</div>
		</div>
	</body>
</html>

<script charset="utf-8"  src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
<script>
    const liffId = '1656613910-XdyKo09Q'
    liff.init({ liffId })
    .then(() => {
        if (!liff.isLoggedIn()) {
            liff.login();
        }
        liff.getProfile()
        .then(result => {
            console.log(result);
            document.getElementById('welcome').innerHTML = `Welcome, ${result.displayName}`
            document.getElementById('profilePic').src = result.pictureUrl
						document.getElementById('statusMessage').innerHTML = result.statusMessage
        })
				.catch((err) => {
					console.log(err.code, err.message);
				});
    });
</script>
