<p align="center">
  <a href="https://www.uit.edu.vn/" title="Trường Đại học Công nghệ Thông tin" style="border: none;">
    <img src="https://i.imgur.com/WmMnSRt.png" alt="Trường Đại học Công nghệ Thông tin | University of Information Technology">
  </a>


<h1 align="center"><b>Frenzy</b></h1>

 ## THÀNH VIÊN NHÓM
| STT | MSSV     | Họ và Tên             | GitHub                                   | Email                  |
| :-- | :------- | :-------------------- | :--------------------------------------- | :--------------------- |
| 1   | 22520888 | Trần Gia Minh         | https://github.com/gm_ecommerce          | 22520888@gm.uit.edu.vn |
| 2   | 22520497 | Đàm Quốc Hưng         | https://github.com/HungDam00             | 22520497@gm.uit.edu.vn |
| 3   | 22520373 | Nguyễn Trần Mỹ Hà     | https://github.com/myhant                | 22520373@gm.uit.edu.vn |
| 4   | 22520063 | Nguyễn Thị Nguyệt Ánh | https://github.com/nguyetanhLeo          | 22520063@gm.uit.edu.vn |

## GIỚI THIỆU MÔN HỌC
* **Tên môn học:** Phát triển ứng dụng Web
* **Mã môn học:** IS207
* **Mã lớp:** IS207.P13
* **Năm học:** HK1 (2024 - 2025)
* **Giảng viên**: Tạ Việt Phương

 
### HƯỚNG DẪN CHẠY DỰ ÁN ShoeStory

## Yêu cầu cài đặt

- Trình chỉnh sửa văn bản, VD: [Visual Studio Code](https://code.visualstudio.com/download)
- Web server XAMPP để cài đặt Apache và PHP: [XAMPP](https://www.apachefriends.org/download.html)
- Composer để quản lý các thư viện PHP: [Composer](https://getcomposer.org/download/)
- Tailwind: [Tailwind](https://tailwindcss.com/docs/installation)

## Cài đặt phần Backend

**Bước 1:** Chạy xampp và start Apache và MySQL

**Bước 2:** Tạo file dữ liệu json với đường dẫn: storage/app/json/nike_db.json

**Bước 3:** Mở project bằng VSCode, mở terminal và chạy các lệnh sau: `npm i` >>`composer i` >>`php artisan migrate ` >>`php artisan migrate:fresh --seed`  để import cơ sở dữ liệu trong folder database từ [đây](https://github.com/iTeddy1/Frenzy-real/blob/main/database/data/nike_db.json) vào database của bạn.

## Cài đặt phần Frontend

**Bước 3:** Clone Project thông qua Github.

**Bước 4:** Sau khi clone hoặc giải nén, mở project bằng Visual Code Studio, mở terminal và chạy các lệnh sau: `php artisan serve` >> Vào đường dẫn http://localhost:8000/ để đi đến trang web.

**Bước 5:** Mở session mới trong terminal của Visual Code Studio (không tắt session cũ): `npm run dev`.
## Đăng nhập tài khoản sau để vào trang Admin
Email: admin@example.com
Password: 123123123


#
