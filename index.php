<form action="search_users.php" method="post">
   
    Active Directory User seatch<br />
	Choose an Option:<br>
    <select name="filter">
        <option value="sn">Last name</option>
        <option value="displayname">Display name (first and last name)</option>
        <option value="l">Local</option>
		<option value="name">User</option>
    </select><br />
    <input type="text" name="keyword" size="20"
           maxlength="20" value="" /><br />
    <input type="submit" value="Fetch" />
  </form>
