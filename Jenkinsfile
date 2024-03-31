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
                dir('C:\\ProgramData\\Jenkins\\.jenkins\\workspace\\hotel\\vendor\\bin\\phpunit test') {
                bat 'vendor\\bin\\phpunit test'
                }
            }
        }
        stage('Deployment') {
            steps {
                echo "Deployment"
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
