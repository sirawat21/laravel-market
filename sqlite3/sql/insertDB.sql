-- ###########################################################################
--                  INSERTING DATA INTO TABLES OF ASSIGNMENT 1 7005ICT
-- CONTRIBUTOR:
--              s5203427 Sirawat Thiangthae
-- ###########################################################################

-- ---------------------------------------------------------------------------
--  CLIENT
-- ---------------------------------------------------------------------------
insert into Client (idClient, licence, fName, lName, phone) values 
(1, '723328456', 'Pim', 'Pimpichar', '0412345678'),
(2, '356983321', 'Pat', 'Tamakorn', '0487654321'),
(3, '109120679', 'Ben', 'Chinawat', '0498712364'),
(4, '221513283', 'Brett', 'Sirawat', '0434578920'),
(5, '283092383', 'Tony', 'Pinyawat', '0417354220'),
(6, '132183291', 'Kan', 'Suwana', '0417354220');

-- ---------------------------------------------------------------------------
--  vehicle
-- ---------------------------------------------------------------------------
insert into Vehicle (idVehicle, rego, vin, make, model, year, colour, img, odometer, detail) values 
(1, 'D58E35', 'URGY77Y9W6B1G21Y0', 'Toyota', 'Camry', '2016', 'Eclipse Black', 'd58e35.jpg', 63000, 'what a stunning example this is, extremely well presented inside and out finished in and desirable eclipse black duco with black rims, all backed by full toyota logbook service history and low kms! powered by a punchy 2.5l engine and smooth automatic transmission and loaded with features.'),
(2, '82AFA9', '3LJIVNX2X52XR99PS', 'Mercedes Benz', 'GLA-Class', '2015', 'Cirrus White', '82afa9.jpg', 55000, 'the gla soft-roader owes its basics to the new a-class benz, but it has a lot more than just a slight jacking-up if the suspension and a few tough add-ons. easier to climb into because the seats are set higher and offering more luggage space.'),
(3, '40E27B', '1209V5X9NA0O2X6QI', 'Volkswagen', 'Polo', '2021', 'Pure White', '40e27b.jpg', 1200, 'the volkswagen polo is not just a pretty face. it?s a highly efficient engine. it?s more legroom, headroom and luggage space. it?s advanced safety and technology. it?s the winner of the drive car of the year 2021 best city car, and better than ever before.'),
(4, '92B13A', 'Q34Q1BKHJYXTFHJSE', 'Toyota', 'Corolla hybrid', '2021', 'Silver Pearl', '92b13a.jpg', 22000, 'the toyota corolla 2021 comes in hatchback and sedan. the toyota corolla 2021 is available in regular unleaded petrol and hybrid with regular unleaded. '),
(5, '8F23Z0', '5PPOKSHZN2MQDOCYE', 'Volkswagen', 'Golf', '2015', 'Black', '8f2280.jpg', 52000, 'the volkswagen gold remains something of a benchmark. the latest golf 7 is a refined, highly capable and competitively priced five-door hatch or wagon offering everything from the base-spec 1.4-litre petrol 92tsi model producing 92kw/200nm and tagged well below $25,000, to the mighty 206kw/380nm all wheel drive 2.0-litre golf r.'),
(6, 'B8C9D4', '22FONBCCIJR9HA2K9', 'BMW', 'M4', '2021', 'Green', 'b8c9d4.jpg', 3000, 'the bmw 4 series coupé m models offer a fascinating combination of aesthetics, character and typical m athleticism. leading the trio is the bmw m4 competition coupé with an impressive 375kw of power and 650 nm of torque. equipped with a high-performance bmw m twinpower turbo power unit, 8-speed m steptronic with drivelogic, optional all-wheel drive m xdrive*, active m differential and numerous technologies derived from motorsport, it guarantees maximum driving dynamic.'),
(7, '3AM38V', 'OO9PIMU6YT66YFVY2', 'Ford', 'Fiesta', '2016', 'Frozen White', '3am38v.jpg', 60000, "Race in and test drive this Frozen White 2016 Ford Fiesta Ambiente Hatch today.  Packed with features we're sure this 1.5l unleaded beauty won't disappoint. This car drives like a dream with the 5 Speed Manual Transmission. The Ford Fiesta comes with the following features good logbook service history with one owner, economical car equally at home on the highways. Travel safely with the reassurance of a 5-star ANCAP safety rating with the following safety features ABS, 9 airbags, EBD, Hill Holder and Traction Control."),
(8, 'I27GH2', 'O1CC23EY630RGFSZ4', 'Mazda', 'CX-9', '2021', 'Soul Red Crystal', 'i27gh2.jpg', 2000, "6 airbags to give you added protection with an ANCAP safety rating of 5. The integrated bluetooth system connects your enabled phone through the audio system. This Brand New Mazda CX-9 has lane departure warning, automatic headlamps, USB audio input, front cup holders, adaptive cruise control and satellite navigation (GPS). Has enough seats for 7 people.");


-- ---------------------------------------------------------------------------
--  Booking
-- ---------------------------------------------------------------------------
insert into Booking (idVehicle, idClient, start_date, return_date) values 
(6, 4, '2021-09-02 08:00', '2021-09-25 08:00'),
(5, 6, '2021-09-01 11:30', '2021-09-28 11:00'),
(7, 5, '2021-09-03 09:00', '2021-09-20 09:00');

-- ---------------------------------------------------------------------------
--  VehicleBookingLog
-- ---------------------------------------------------------------------------
insert into VehicleBookingLog (idVBlog, idVehicle, frequency, totalHour) values 
(1, 1, 65, 950),
(2, 2, 55, 850),
(3, 3, 15, 100),
(4, 4, 40, 800),
(5, 5, 50, 830),
(6, 6, 20, 250),
(7, 7, 60, 900),
(8, 8, 10, 150);
