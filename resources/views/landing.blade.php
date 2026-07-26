<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tato - Potato Revival</title>
    <style>
        body { margin: 0; background: #191B1D; color: #fff; font-family: sans-serif; }
        .hero { display: flex; height: 100vh; align-items: center; justify-content: space-around; padding: 0 10%; background: radial-gradient(circle, #2c2f33 0%, #191B1D 100%); }
        .signup-box { background: #232527; padding: 30px; border-radius: 8px; width: 380px; box-shadow: 0 4px 15px rgba(0,0,0,0.5); }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-size: 12px; font-weight: bold; margin-bottom: 5px; color: #BDC3C7; }
        .form-group input, .form-group select { width: 100%; padding: 10px; background: #111213; border: 1px solid #393B3D; color: #fff; border-radius: 4px; box-sizing: border-box; }
        .btn-signup { width: 100%; padding: 12px; background: #00A2FF; border: none; color: #fff; font-weight: bold; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .btn-signup:hover { background: #0088dd; }
    </style>
</head>
<body>
    <div class="hero">
        <div>
            <h1 style="font-size: 48px; margin-bottom: 10px;">Tato</h1>
            <p style="font-size: 20px; color: #BDC3C7;">potato revival</p>
        </div>
        <div class="signup-box">
            <h2 style="margin-top: 0;">Sign Up and Start Having Fun!</h2>
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Don't use your real name" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="At least 8 characters" required>
                </div>
                <div class="form-group">
                    <label>Gender (Optional)</label>
                    <select name="gender">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button type="submit" class="btn-signup">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
