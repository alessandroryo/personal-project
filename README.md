# Prevents Snooping and Attack Features

- **HTTPS**
    
    I publish my website using Heroku so that the HTTPS feature will be automatically installed in it. I did not provide SSL on this trial website because an additional fee is required for activation. You will find HTTPS next to the URL.
    
    ![image](https://user-images.githubusercontent.com/89993118/177641608-e54ceda3-aa19-48ba-81e3-38dfc7872060.png)
    
- **HTTPOnly**
    
    Using the CSRF cookie as HTTPOnly in my Laravel application provides protection against Cross-Site Scripting or XSS. You can see this feature in the application section of your browser.
    
    ![image](https://user-images.githubusercontent.com/89993118/177641583-ba1a72ec-3c0c-46ba-a533-931516906eaa.png)
    
- **Browser Session Management**
    
    This built-in feature of Laravel that I implemented monitors account activity, whether online or offline, in other users' browsers. Every user can log out from other browsers that are not being used. This aims to prevent hackers or irresponsible users from opening your account in a browser that you have logged in to. You will also need to enter your account password to verify this activity.
    
    ![image](https://user-images.githubusercontent.com/89993118/177641563-0b96e37a-f674-4b3f-9652-fb6b04cb052f.png)
    
    ![image](https://user-images.githubusercontent.com/89993118/177641548-c7563523-0ee9-4308-91a3-5c8e5aa658f5.png)
    
- **SESSION_LIFETIME**
    
    This feature logs out the user automatically when the user opens my website but does not do any activity. The duration I set to activate this feature is 120 minutes.
    
    ![image](https://user-images.githubusercontent.com/89993118/177641665-955ef94e-f39a-4bbe-8e80-e76c32e48d29.png)
    

# Prevents IDOR Features

- **Auth Sanctum**
    
    When installing Laravel Jetstream, this Laravel Sanctum middleware will also be installed automatically. This feature aims to authenticate users who log in with their respective accounts to my website. This feature can be found in the routes folder.
    
    ![image](https://user-images.githubusercontent.com/89993118/177641511-7cff0aff-7bde-4d0c-a531-cc40ffab421b.png)
    ![image](https://user-images.githubusercontent.com/89993118/177641485-b4221a8a-864a-4abe-bc38-d2439abc40e8.png)
    
- **Authenticated User**
    
    To increase security on IDOR prevention, I added a conditional to the controllers and views files. So that when the user wants to open another person's data object, the words "Not found" will appear.
    
   ![image](https://user-images.githubusercontent.com/89993118/177641457-feac75c2-9c4f-4266-89a7-3ffcc86e9269.png)
    
    ![image](https://user-images.githubusercontent.com/89993118/177641440-4c0bb31a-221b-4187-aef9-c54d558e983e.png)
    
- **Register**
    
    I use a registration system to prevent unknown users from entering my website. Before logging in, they must register their name, email, password, and password confirmation on their account. This makes it mandatory for users to have their account data without accessing other people's account data. User passwords will also be hashed to make it harder for hackers to open other user accounts.
    
    ![image](https://user-images.githubusercontent.com/89993118/177641424-2d77def7-5237-419c-9d86-4e9e47eb4e8c.png)
    
- **Login**
    
    Before registered users can access all the features on my website, users are required to log in first. Users only need to enter their registered email and password. After logging in, this makes the user just “playing” with their account, and they can't access other people's data.
    
    ![image](https://user-images.githubusercontent.com/89993118/177641403-7226c45a-fa2d-4e13-9b46-60197540d43c.png)
