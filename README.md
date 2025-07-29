# ♻️ Smart Waste Management System

A full-stack **waste management and complaint resolution system** built using **PHP**, **MySQL**, **JavaScript**, and **HTML/CSS**. The system is designed to streamline the reporting, monitoring, and management of municipal waste through **role-based dashboards** for Admins, Agents, Cleaners, and Public Users.

> 🧑‍💻 Developed as part of a practical PHP project to simulate real-world municipal operations.

---

## 📌 Key Features

- 🧾 **User Registration/Login** for public waste complaint reporting
- 🧑‍⚕️ **Cleaner & Agent Logins** with role-specific dashboards
- 🛠️ **Admin Panel** to manage agents, cleaners, reports, and complaints
- 📤 **Complaint Submission & Tracking** by users
- 🔄 **Real-time update of status** for complaints and cleaning reports
- 📈 Daily logs for attendance, work reports, and cleaner allocations
- 🌐 Responsive design using **CSS + Bootstrap**

---

## 🛠️ Tech Stack

| Technology     | Purpose                            |
|----------------|------------------------------------|
| PHP            | Backend logic & server scripting   |
| MySQL          | Database storage                   |
| HTML/CSS       | Frontend layout & UI styling       |
| JavaScript     | Form validation, interactivity     |
| Font Awesome   | Iconography                        |
| Bootstrap      | Responsive design (optional)       |

---

## 📂 Folder Structure

Waste-Management_System/
├── css/ # Stylesheets
├── js/ # JavaScript files
├── images/ # UI graphics
├── font-awesome/ # Icon library
├── nbproject/ # NetBeans config (if applicable)
├── *.php # Core PHP pages (user, admin, agent, cleaner)
├── dbconfig.php # DB connection setup
├── .htaccess # Apache routing config
├── README.md # Project documentation

yaml
Copy
Edit

---

## 🧑‍🤝‍🧑 User Roles & Dashboards

### 1️⃣ Admin
- Manage municipal agents and cleaners
- Allocate cleaning areas
- Monitor complaints, feedback, and reports

### 2️⃣ Agent
- View and assign reports
- Track cleaner activity

### 3️⃣ Cleaner
- View assigned areas
- Submit daily clean-up reports

### 4️⃣ User
- Register/login to submit complaints
- Track complaint status
- View previous cleaning history in their locality

---

## 🚀 Getting Started

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/MohammedAzam-08/Waste-Management_system.git
cd Waste-Management_system
2️⃣ Set Up the Environment
Install XAMPP, WAMP, or use a local Apache + MySQL setup

Import the SQL database (you may need to export it as part of this repo)

Place the project folder inside your htdocs/ directory

3️⃣ Configure Database Connection
Update dbconfig.php with your local DB settings:

php
Copy
Edit
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'waste_management';
📸 Screenshots (Add Once Available)
Admin Dashboard	User Complaint Page	Cleaner Report Form

⚠️ Troubleshooting
🔌 Database Connection Error?

Make sure MySQL is running and your dbconfig.php credentials match.

🌐 CSS or JS not loading?

Ensure Apache's .htaccess and project root path are configured correctly.

🎯 Future Enhancements
 Google Maps API to geotag waste locations

 Notification system (SMS/email) for updates

 Graphs and visual reports for administrators

 Cleaner performance tracking with attendance analysis

👨‍💻 Author
Mohammed Azam
🧑‍💻 PHP | Full Stack | MySQL Developer
📍 Shivamogga | Bengaluru, India
🔗 Portfolio | LinkedIn | GitHub

⭐ Support & Contribution
⭐ Star the repository if you found it useful

🛠️ Open issues for bugs or suggestions

🤝 Feel free to fork and contribute

“Modern problems require smart civic tech solutions.”
