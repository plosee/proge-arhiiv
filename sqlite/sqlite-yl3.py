import tkinter as tk
from tkinter import ttk, messagebox
from ttkbootstrap import Style
import sqlite3

class CarDatabaseApp:
    def __init__(self, master):
        self.master = master
        self.master.title("Car Database App")
        self.master.geometry("800x600")
        
        self.style = Style(theme="darkly")
        self.page = 1
        
        self.create_widgets()
        self.load_data()
    
    def create_widgets(self):
        self.tree = ttk.Treeview(self.master)
        self.tree["columns"] = ("first_name", "last_name", "email", "car_make", "car_model", "car_year", "car_price")
        self.tree.heading("#0", text="ID")
        self.tree.heading("first_name", text="First Name")
        self.tree.heading("last_name", text="Last Name")
        self.tree.heading("email", text="Email")
        self.tree.heading("car_make", text="Car Make")
        self.tree.heading("car_model", text="Car Model")
        self.tree.heading("car_year", text="Car Year")
        self.tree.heading("car_price", text="Car Price")
        self.tree.column("#0", width=50)
        self.tree.column("first_name", width=100)
        self.tree.column("last_name", width=100)
        self.tree.column("email", width=150)
        self.tree.column("car_make", width=100)
        self.tree.column("car_model", width=150)
        self.tree.column("car_year", width=100)
        self.tree.column("car_price", width=100)
        self.tree.pack(expand=True, fill="both")
        
        self.page_label = tk.Label(self.master, text="Page: 1")
        self.page_label.pack()
        
        self.prev_button = ttk.Button(self.master, text="Prev", command=self.prev_page)
        self.prev_button.pack(side="left")
        
        self.next_button = ttk.Button(self.master, text="Next", command=self.next_page)
        self.next_button.pack(side="right")
        
        self.search_var = tk.StringVar()
        self.search_entry = ttk.Entry(self.master, textvariable=self.search_var)
        self.search_entry.pack()
        self.search_entry.bind("<KeyRelease>", self.search)
        
        self.add_button = ttk.Button(self.master, text="Add", command=self.add_data)
        self.add_button.pack()
        
        self.delete_button = ttk.Button(self.master, text="Delete", command=self.delete_data)
        self.delete_button.pack()
        
        self.update_button = ttk.Button(self.master, text="Update", command=self.update_data)
        self.update_button.pack()
        
        self.stats_button = ttk.Button(self.master, text="Stats", command=self.show_stats)
        self.stats_button.pack()
    
    def load_data(self):
        self.conn = sqlite3.connect("sqlite/epood_mlaane.db")
        self.cur = self.conn.cursor()
        self.cur.execute("CREATE TABLE IF NOT EXISTS mlaane (id INTEGER PRIMARY KEY AUTOINCREMENT, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, car_make VARCHAR(255) NOT NULL, car_model VARCHAR(255) NOT NULL, car_year INTEGER, car_price DECIMAL(10,2))")
        self.conn.commit()
        self.show_data()
    
    def show_data(self):
        offset = (self.page - 1) * 20
        self.cur.execute("SELECT * FROM mlaane LIMIT 20 OFFSET ?", (offset,))
        rows = self.cur.fetchall()
        self.tree.delete(*self.tree.get_children())
        for row in rows:
            self.tree.insert("", "end", text=row[0], values=(row[1], row[2], row[3], row[4], row[5], row[6], row[7]))
            
    def prev_page(self):
        if self.page > 1:
            self.page -= 1
            self.show_data()
            self.update_page_label()

    def next_page(self):
        self.page += 1
        self.show_data()
        self.update_page_label()

    def update_page_label(self):
        self.page_label.config(text=f"Page: {self.page}")
    
    def search(self, event=None):
        search_term = self.search_var.get()
        self.cur.execute("SELECT * FROM mlaane WHERE first_name LIKE ? OR last_name LIKE ? OR email LIKE ? OR car_make LIKE ? OR car_model LIKE ?", 
                         ('%' + search_term + '%', '%' + search_term + '%', '%' + search_term + '%', '%' + search_term + '%', '%' + search_term + '%'))
        rows = self.cur.fetchall()
        self.tree.delete(*self.tree.get_children())
        for row in rows:
            self.tree.insert("", "end", text=row[0], values=(row[1], row[2], row[3], row[4], row[5], row[6], row[7]))
    
    def add_data(self):
        first_name = input("Enter first name: ")
        last_name = input("Enter last name: ")
        email = input("Enter email: ")
        car_make = input("Enter car make: ")
        car_model = input("Enter car model: ")
        car_year = int(input("Enter car year: "))
        car_price = float(input("Enter car price: "))

        self.cur.execute("INSERT INTO mlaane (first_name, last_name, email, car_make, car_model, car_year, car_price) VALUES (?, ?, ?, ?, ?, ?, ?)",
                         (first_name, last_name, email, car_make, car_model, car_year, car_price))
        self.conn.commit()
        self.show_data()
    
    def delete_data(self):
        selected_item = self.tree.selection()
        if len(selected_item) == 0:
            messagebox.showerror("Error", "Please select a row to delete.")
        else:
            result = messagebox.askyesno("Confirm", "Are you sure you want to delete this row?")
            if result:
                for item in selected_item:
                    self.cur.execute("DELETE FROM mlaane WHERE id=?", (self.tree.item(item, "text"),))
                    self.conn.commit()
                self.show_data()
                messagebox.showinfo("Success", "Row deleted successfully.")
    
    def update_data(self):
        selected_item = self.tree.selection()
        if len(selected_item) == 0:
            messagebox.showerror("Error", "Please select a row to update.")
        else:
            first_name = input("Enter new first name: ")
            last_name = input("Enter new last name: ")
            email = input("Enter new email: ")
            car_make = input("Enter new car make: ")
            car_model = input("Enter new car model: ")
            car_year = int(input("Enter new car year: "))
            car_price = float(input("Enter new car price: "))
            
            for item in selected_item:
                self.cur.execute("UPDATE mlaane SET first_name=?, last_name=?, email=?, car_make=?, car_model=?, car_year=?, car_price=? WHERE id=?", 
                                 (first_name, last_name, email, car_make, car_model, car_year, car_price, self.tree.item(item, "text")))
                self.conn.commit()
            
            self.show_data()
            messagebox.showinfo("Success", "Row updated successfully.")
    
    def show_stats(self):
        self.cur.execute("SELECT COUNT(*) FROM mlaane")
        total_rows = self.cur.fetchone()[0]
        
        self.cur.execute("SELECT COUNT(DISTINCT car_make) FROM mlaane")
        total_car_makes = self.cur.fetchone()[0]
        
        self.cur.execute("SELECT AVG(car_price) FROM mlaane")
        average_car_price = self.cur.fetchone()[0]
        
        messagebox.showinfo("Statistics", f"Total Rows: {total_rows}\nTotal Car Makes: {total_car_makes}\nAverage Car Price: {average_car_price}")

def main():
    root = tk.Tk()
    app = CarDatabaseApp(root)
    root.mainloop()

if __name__ == "__main__":
    main()
