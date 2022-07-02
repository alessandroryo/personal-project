# Security Assignment 3: Hacktivist
## Prevents Snooping and Attacks (Session Hijacking)

- **Using HTTPS/TLS (SSL Certificate)**
    Currently, our website does not have an SSL certificate, but it will be given an SSL certificate by the company that becomes our client later because we use hosting from their company. You'll find it next to the URL in your browser.
    🗣️(https://drive.google.com/file/d/1E3cTTdW9pYvfpLZKvhbDwQGxHtT1vHzg/view?usp=sharing)
- **HTTPOnly**
    This cookie prevents attacks in the form of XSS (Cross-Site Scripting). You can find this feature in the application browser section of our website.
    ![image](https://user-images.githubusercontent.com/89993118/175805373-0210adaa-d46f-4729-aaa0-89d91fe90200.png)
- **Session Management**
    When a user logs in on multiple devices, the user will potentially be hacked from their session account. To prevent that, we create a browser session. The goal is that users can log out from other currently active browsers so that browsers on devices that are not in use can be cleaned or logged out again. User can find it in their profile page.
    ![image](https://user-images.githubusercontent.com/89993118/175805352-48541409-9ad2-4339-bd78-5c7b5acfcda5.png)
## Prevents IDOR

- **Route and Auth::user**
    In Laravel Jetstream, the route will be provided with middleware in the form of Authentication Session, Verified User, and Sanctum. Then to prevent IDOR, each controller is given Auth::user, which prevents users from opening other users' projects.
    
    ![image](https://user-images.githubusercontent.com/89993118/175805348-74e3b83d-6a17-454a-982a-683d546477e3.png)
- **Register and Login**
    To prevent users from entering the website at will, we provide a register and login feature that requires users to create and log in to the website with their account. Hashing passwords is also done to make it difficult for users to enter other people's accounts.
    ![image](https://user-images.githubusercontent.com/89993118/175805343-35808a4a-8b11-48e7-b3c5-ed25c40dd30c.png)
    ![image](https://user-images.githubusercontent.com/89993118/175805338-ccb4e19e-cd72-4231-865c-6f80aaebd066.png)
