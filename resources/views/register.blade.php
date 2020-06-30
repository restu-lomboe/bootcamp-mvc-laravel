<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootcamp Sanbercode</title>
</head>
<body>
    <div>
        <h1>Buat Account Baru!</h1>
        <h4>Sign Up Form</h4>
        <form action=" {{ route('register') }} " method="POST">
            {{ csrf_field() }}
            <div>
                <p>First Name :</p>
                <input type="text" name="first_name">
            </div>
            <div>
                <p>Last Name :</p>
                <input type="text" name="last_name">
            </div>
            <div>
                <p>Gender :</p>
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label><br>
                <input type="radio" name="gender" id="others" value="others">
                <label for="others">Others</label><br>
            </div>
            <div>
                <p>Nationality :</p>
                <select name="nationality">
                    <option value="indonesian">Indonesian</option>
                    <option value="malaysia">Malaysia</option>
                    <option value="singapura">Singapura</option>
                </select>
            </div>
            <div>
                <p>Language Spoken :</p>
                <input type="checkbox" name="indonesia" id="indonesia" value="indonesia">
                <label for="indonesia">Bahasa Indonesia</label><br>
                <input type="checkbox" name="english" id="english" value="english">
                <label for="english">English</label><br>
                <input type="checkbox" name="others_language" id="others_language" value="others_language">
                <label for="others_language">Others</label><br>
            </div>
            <div>
                <p>Bio :</p>
                <textarea name="bio" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

