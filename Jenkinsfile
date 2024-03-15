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
                bat 'C:\\composer\\vendor\\bin\\phpunit'
            }
        }
        stage('Deployment') {
            steps {
                bat 'ssh git@github.com:patel-jai/hotel-Booking.git "cd https://github.com/patel-jai/hotel-Booking.git && git pull origin master && composer install && php artisan migrate"'
            }
        }
        stage('Monitoring') {
            steps {
                bat 'curl -Ls https://download.newrelic.com/install/newrelic-cli/scripts/install.ps1 | Invoke-Expression'
                bat 'newrelic install --skip-proxy --quiet'
                bat 'newrelic alert-conditions list'
                bat 'newrelic alert-policies list'
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
