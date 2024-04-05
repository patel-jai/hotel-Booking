pipeline {
    agent any
    
    stages {
        stage('Build') {
            steps {
                bat 'C:\\composer\\composer install'
                bat 'C:\\composer\\composer require --dev phpunit/phpunit'
                bat 'php -f test/homepage.php'
            }
        }
        stage('Testing') {
            steps {
                bat 'vendor\\bin\\phpunit test/test.php'
            }
        }
        stage('Deployment') {
            steps {
                bat 'git pull https://github.com/patel-jai/hotel-Booking.git'
                bat 'xcopy /y hotel-Booking\\test\\test.php test'
            }
        }
    }

    post {
        success {
            echo 'Deployment successful!'
            emailext subject: 'Deployment Successful',
                      body: 'The deployment was successful.',
                      to: 'pj110098@gmail.com'
        }
        failure {
            echo 'Deployment failed!'
            emailext subject: 'Deployment Failed',
                      body: 'The deployment failed.',
                      to: 'pj110098@gmail.com'
        }
    }
}
