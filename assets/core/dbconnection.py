import mysql.connector

# Define the database connection parameters
db_config = {
    "host": "127.0.0.1",
    "user": "root",
    "password": "",
    "database": "rca_test_db",
}

def get_connection():
    try:
        # Connect to the MySQL database
        conn = mysql.connector.connect(**db_config)

        if conn.is_connected():
            print("Connected to MySQL database")

            # Create a cursor object
            cursor = conn.cursor()
        return conn

            # Execute a sample SQL query
            # cursor.execute("SELECT * FROM resume_info")

            # Fetch and print the results
            # for row in cursor.fetchall():
                # print(row)

    except mysql.connector.Error as e:
        print("Error:", e)

    # finally:
    #     # Close the cursor and database connection
    #     if 'cursor' in locals():
    #         cursor.close()
    #     if 'conn' in locals() and conn.is_connected():
    #         conn.close()
    #         print("Database connection closed")

# Call the get_connection function to establish a database connection
# get_connection()
