<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form onSubmit = {this.onAddSubmit}>
                <div class="section"><span>1</span>First Name & Address</div>
                <div class="inner-wrap">
                    <label>Your Full Name <input type="text" name="name" /></label>
                    <label>Your User Name<input type="text" name="username" /></label>
                    <label>Address <textarea name="address"></textarea></label>
                </div>

                <div class="section"><span>2</span>Email & Phone</div>
                <div class="inner-wrap">
                    <label>Email Address <input type="text" name="email" /></label>
                    <label>Phone Number <input type="text" name="phoneNumber" /></label>
                </div>

                <div class="section"><span>3</span>Passwords</div>
                    <div class="inner-wrap">
                    <label>Password <input type="password" name="password" /></label>
                    
                </div>
                <div class="button-section">
                    <input type="submit" name="Sign Up" />
                    <span class="privacy-policy">
                    <input type="checkbox" name="field7"/>You agree to our Terms and Policy. 
                    </span>
                </div>
            </form>
	</div>

</body>
</html>