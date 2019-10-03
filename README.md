# cosc349-aws
Student ID: 8482738

This is the second assignment for COSC349. This assignment uses vagrant-aws plugin to deploy to aws using amazon educate credentials.
http://ec2-3-86-162-0.compute-1.amazonaws.com/taker_index.php
http://ec2-54-211-203-27.compute-1.amazonaws.com/reader_index.php

Steps to deploy Note Taker and Note Reader application on Windows:
  - Install Vagrant (https://www.vagrantup.com).
  - Open Windows Powershell and run command:
    - "vagrant plugin install --plugin-version 1.0.1 fog-ovirt"
    - "vagrant plugin install vagrant-aws"
  - In .aws put in your aws account details credentials into credentials.
  - Create a keypair in aws under network and security. It should prompt a file to download.
  - Move the file into .ssh and in Vagrantfile, set aws.keypair_name and the override.ssh.private_key_path to your keypair
  - Choose instance type. (I would keep it at t2.micro)
  - Create two security groups in aws:
    - The first one is to allow access to ssh
    - Set inbound type ssh and for each of inbound type, set the source as 0.0.0.0/0 and another as ::/0
    - Set outbound type as all trafic and source as 0.0.0.0/0
    - The second security groups is to allow access for web
    - Set inbound type to HTTP and another one to HTTPS. And for each of the types, set the sources as 0.0.0.0/0 and another as ::/0
  - After creating the two security groups, put the two security group IDs into vagrant file for aws.security_groups
  - For subnet ID, you create one in aws under VPC.
  - For AMIs, they should be fine. If they are not, go to https://cloud-images.ubuntu.com/locator/ec2/ to find a suitable one.
  - Then run "vagrant up" from Powershell after configuring Vagrantfile
  - To view webpages, go to EC2 instances in aws and open either the Public DNS (IPv4) or the IPv4 Public IP
  - Now to set up a Database, go to aws and choose your prefered database from RDS (I used mysql)
  - After the database finishes setting up its instance, you need to go into the folder www and into its sub directories to set up the $dbhost as the endpoint, the $username as the user you used to make the database as well as the $password.
  - Then you need to create the tables, I used ubuntu to do this. Install mysql with "sudo apt-get update" then "sudo apt-get install mysql-client"
  - The command to get into your database is "mysql -h yourendpoint -P 3306 -u yourusername -p", it will prompt for password.
  - Create the database notes with "CREATE DATABASE notes" and use it with "USE notes"
  - Then to create the table for webNotes "CREATE TABLE webNotes(noteID int(11) NOT NULL auto_increment, note varchar(400), userID varchar(9) DEFAULT 'default', primary key(noteID));"
