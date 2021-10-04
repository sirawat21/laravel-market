-- ###########################################################################
--                  CREATING TABLE OF ASSIGNMENT 1 7005ICT
-- CONTRIBUTOR:
--              s5203427 Sirawat Thiangthae
-- ###########################################################################

-- ---------------------------------------------------------------------------
--  CLIENT
-- ---------------------------------------------------------------------------
CREATE TABLE Client (
    idClient INTEGER PRIMARY KEY AUTOINCREMENT,
    licence CHAR(9),
    fName VARCHAR(50),
    lName VARCHAR(50),
    phone CHAR(10)
);

-- ---------------------------------------------------------------------------
--  VEHICLE
-- ---------------------------------------------------------------------------
CREATE TABLE Vehicle (
    idVehicle INTEGER PRIMARY KEY AUTOINCREMENT,
    rego CHAR(6),
    vin CHAR(17),
    make VARCHAR(50),
    model VARCHAR(50),
    year CHAR(4),
    colour VARCHAR(20),
    img VARCHAR(50),
    odometer INTEGER,
    detail TEXT
);

-- ---------------------------------------------------------------------------
--  VEHICLE BOOKING LOG
-- ---------------------------------------------------------------------------
CREATE TABLE VehicleBookingLog (
    idVBlog INTEGER PRIMARY KEY AUTOINCREMENT,
    idVehicle INTEGER,
    frequency INTEGER,
    totalHour INTEGER
);

-- ---------------------------------------------------------------------------
--  BOOKING
-- ---------------------------------------------------------------------------
CREATE TABLE Booking (
    idBooking INTEGER PRIMARY KEY AUTOINCREMENT,
    idVehicle INTEGER,
    idClient INTEGER,
    start_date DATETIME,
    return_date DATETIME
);