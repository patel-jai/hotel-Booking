pipeline {
    agent any
    
    stages {
        stage('Build') {
            steps {
                bat 'C:\\composer\\composer install'
                 bat 'C:\\composer\\composer require --dev phpunit/phpunit'
            }
        }
        stage('Testing') {
            steps {
                bat 'vendor\\bin\\phpunit test/test.php'
            }
        }
        stage('Deployment') {
            steps {
                bat 'scp -r https://github.com/patel-jai/hotel-Booking.git'
            }
        }
    }

    post {
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed!'
        }
    }
}
