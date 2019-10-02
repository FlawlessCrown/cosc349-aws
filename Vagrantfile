# -*- mode: ruby -*-
# vi: set ft=ruby :
require 'yaml'
require 'vagrant-aws'

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  config.vm.box = "dummy"

  config.vm.define "webserver1" do |webserver1|
    webserver1.vm.provider :aws do |aws, override|
      aws_config = (YAML.load_file('.aws/credentials'))
      aws.access_key_id = aws_config.fetch("aws_access_key_id")
      aws.secret_access_key = aws_config.fetch("aws_secret_access_key")
      aws.session_token = aws_config.fetch("aws_session_token")
      # The region for Amazon Educate is fixed.
      aws.region = "us-east-1"
      # These options force synchronisation of files to the VM's
      # /vagrant directory using rsync, rather than using trying to use
      # SMB (which will not be available by default).
      override.nfs.functional = false
      override.vm.allowed_synced_folder_types = :rsync
      # The keypair_name parameter tells Amazon which public key to use.
      aws.keypair_name = "cosc349"
      # The private_key_path is a file location in your macOS account
      # (e.g., ~/.ssh/something).
      override.ssh.private_key_path = ".ssh/cosc349.pem"
      # Choose your Amazon EC2 instance type (t2.micro is cheap).
      aws.instance_type = "t2.micro"
      # Security groups
      aws.security_groups = ["sg-0caf317906ab28426", "sg-0d814594928f03478"]
      aws.availability_zone = "us-east-1b"
      aws.subnet_id = "subnet-2b772905"
      # ubuntu ami
      aws.ami = "ami-04763b3055de4860b"
      override.ssh.username = "ubuntu"
      override.vm.synced_folder ".", "/vagrant", owner: "ubuntu", group: "ubuntu", mount_options: ["dmode=775,fmode=777"]
      override.vm.provision :shell, :path => ".provision/bootstrap_webserver1.sh"
    end
  end

  config.vm.define "webserver2" do |webserver2|
    webserver2.vm.provider :aws do |aws, override|
      aws_config = (YAML.load_file('.aws/credentials'))
      aws.access_key_id = aws_config.fetch("aws_access_key_id")
      aws.secret_access_key = aws_config.fetch("aws_secret_access_key")
      aws.session_token = aws_config.fetch("aws_session_token")
      # The region for Amazon Educate is fixed.
      aws.region = "us-east-1"
      # These options force synchronisation of files to the VM's
      # /vagrant directory using rsync, rather than using trying to use
      # SMB (which will not be available by default).
      override.nfs.functional = false
      override.vm.allowed_synced_folder_types = :rsync
      # The keypair_name parameter tells Amazon which public key to use.
      aws.keypair_name = "cosc349"
      # The private_key_path is a file location in your macOS account
      # (e.g., ~/.ssh/something).
      override.ssh.private_key_path = ".ssh/cosc349.pem"
      # Choose your Amazon EC2 instance type (t2.micro is cheap).
      aws.instance_type = "t2.micro"
      # Security groups: cosc349-aws1, cosc349-web
      aws.security_groups = ["sg-0caf317906ab28426", "sg-0d814594928f03478"]
      aws.availability_zone = "us-east-1b"
      aws.subnet_id = "subnet-2b772905"
      # ubuntu ami
      aws.ami = "ami-04763b3055de4860b"
      override.ssh.username = "ubuntu"
      override.vm.synced_folder ".", "/vagrant", owner: "ubuntu", group: "ubuntu", mount_options: ["dmode=775,fmode=777"]
      override.vm.provision :shell, :path => ".provision/bootstrap_webserver2.sh"
    end
  end
end
