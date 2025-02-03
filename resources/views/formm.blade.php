<!DOCTYPE html>
<html>
  <head>
    <title>Buat Account Baru</title>
  </head>
  <body>
    <h2>Buat Account Baru</h2>

    <form action="welcome">
      <h3>Sign Up Form</h3>

      <label for="firstname">First name :</label>
      <br />
      <input type="text" id="firstname" name="firstname" />
      <br /><br />

      <label for="lastname">Last name :</label>
      <br />
      <input type="text" id="lastname" name="lastname" />
      <br /><br />

      <label>Gender</label>
      <br />
      <input type="radio" id="male" name="gender" value="male" />
      <label for="male">Male</label>
      <br />
      <input type="radio" id="female" name="gender" value="female" />
      <label for="female">Female</label>
      <br /><br />

      <label for="nationality">Nationality</label>
      <br />
      <select id="nationality" name="nationality">
        <option value="indonesia">Indonesia</option>
        <option value="malaysia">malaysia</option>
        <option value="amerika">amerika</option>
        <option value="other">other</option>
      </select>
      <br /><br />

      <label>Language Spoken</label>
      <br />
      <input type="checkbox" id="bahasa" name="language" value="bahasa" />
      <label for="bahasa">Bahasa Indonesia</label>
      <br />
      <input type="checkbox" id="english" name="language" value="english" />
      <label for="english">English</label>
      <br />
      <input type="checkbox" id="other" name="language" value="other" />
      <label for="other">Other</label>
      <br /><br />

      <label for="bio">Bio</label>
      <br />
      <textarea id="bio" name="bio" rows="5" cols="40"></textarea>
      <br /><br />

      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>