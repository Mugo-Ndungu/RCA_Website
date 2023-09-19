import mysql.connector
import smtplib
from email.mime.text import MIMEText

# Connect to the MySQL database
db = mysql.connector.connect(
    host="your_db_host",
    user="your_db_user",
    password="your_db_password",
    database="your_db_name"
)

# Create a cursor
cursor = db.cursor()

# Execute a query to check for new rows
cursor.execute("SELECT * FROM your_table WHERE email_sent = 0")

# Fetch the new rows
new_rows = cursor.fetchall()

# If there are new rows, send an email
if new_rows:
    # Compose the email
    email_subject = "New Rows Added"
    email_body = "New rows have been added to the table."

    # Send the email using an SMTP server
    smtp_server = "your_smtp_server"
    smtp_port = 587
    sender_email = "your_sender_email"
    sender_password = "your_sender_password"
    recipient_email = "admin@example.com"

    message = MIMEText(email_body)
    message["Subject"] = email_subject
    message["From"] = sender_email
    message["To"] = recipient_email

    with smtplib.SMTP(smtp_server, smtp_port) as server:
        server.starttls()
        server.login(sender_email, sender_password)
        server.sendmail(sender_email, [recipient_email], message.as_string())

    # Mark the rows as email_sent = 1 to avoid resending
    cursor.execute("UPDATE your_table SET email_sent = 1 WHERE email_sent = 0")
    db.commit()

# Close the database connection
db.close()
