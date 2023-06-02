<template>
    <div>
    <h1>Student List</h1>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="student in students" :key="student.id">
            <td>{{ student.id }}</td>
            <td>{{ student.fname }}</td>
            <td>{{ student.lname }}</td>
            <td>{{ student.email }}</td>
            <td>{{ student.password }}</td>
            <td>{{ student.created_at }}</td>
            <td>{{ student.updated_at }}</td>
        </tr>
        </tbody>
    </table>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    // variables
    data() {
      return {
        students: [],
      };
    },
    // create() is called when a component is created or initialized. then it will trigger the fetchStudents() method
    created() {
      this.fetchStudents();
      this.checkSum();
    },
    // methods then it's getting data to db then pasting it to students array
    methods: {
      fetchStudents() {
        axios
          .get('/api/viewStudent')
          .then(response => {
            this.students = response.data;
          })
          .catch(error => {
            console.error(error);
          });
      },
      checkSum(){
        axios.get('/api/getChecksum/students').then(response => {
            const tbVal = response.data;
            console.log(tbVal);
        })
      },
    },
  };
  </script>
  