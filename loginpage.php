<?php include 'basic_header.php'?>
<div class="login-container">
    <div class="wrapper">
        <div class="text-center mt-4 name heading">
            লগইন করুন
        </div>
        <form id="access-form"
              class="p-3 mt-3"
              action="handlers/login-handler.php"
              method="post"
              onsubmit="return validate_mobile()">
            <div class="
              form-field
              d-flex
              align-items-center">
                <i class="bi bi-telephone-fill"></i>
                <input type="number"
                       name="phone"
                       id="phone"
                       placeholder="ফোন নাম্বার"
                       required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password"
                       name="login_password"
                       id="pwd"
                       placeholder="পাসওয়ার্ড"
                       required>
            </div>

            <div class=" d-flex align-items-center">

                <div><select class="role"
                            name="user_type"
                            required>

                        <option value="farmer">কৃষক</option>
                        <option value="admin">এডমিন</option>
                        <option value="agri">কৃষিবিদ</option>
                        <option value="customer">ক্রেতা</option>

                    </select></div>
            </div>

            <input type="submit"
                   class="btn mt-3"
                   value="লগইন করুন"
                   id="login_submit">
        </form>
        <div class="login-footer fs-6">
            <p id="forget"> <a href="#">পাসওয়ার্ড ভুলে গিয়েছেন?</a></p>
            <p class="create"><a href="signup-page.php">নতুন একাউন্ট তৈরি করুন </a></p>
        </div>
    </div>
</div>

<?php include 'footer.php'?>