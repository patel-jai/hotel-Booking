pipeline {
    agent any
    
    stages {
        stage('Build') {
            steps {
                bat 'C:\\composer\\composer install'
            }
        }
        stage('Testing') {
            steps {
                bat 'C:\\composer\\composer require --dev phpunit/phpunit'
            }
        }
        stage('Deployment') {
            steps {
                echo "Deployment"
            }
        }
        stage('Monitoring') {
            steps {
                echo "Monitoring"
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
