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
               echo "Testing"
                bat 'vendor\\bin\\phpunit tests'
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
