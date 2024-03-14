pipeline {
    agent any
    
    stages {
        stage('Build') {
            steps {
                echo "Web interface for hotel staff to manage bookings and room allocations"
            }
        }
        stage('Testing') {
            steps {
                echo "Performing testing and quality assurance"
            }
        }
        stage('Deployment') {
            steps {
                echo "Deploying the Hotel Booking Management System to production"
            }
        }
    
        stage('Monitoring') {
            steps {
                echo " Set up monitoring and alerts to detect and respond to any performance or availability issues in production"
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

