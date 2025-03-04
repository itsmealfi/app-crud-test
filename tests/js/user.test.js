const request = require("supertest");
const baseUrl = "http://127.0.0.1:8000/api/appuser"; // Use API route

describe("User API Test", function () {
    it("should get all appuser", async function () {
        const res = await request(baseUrl).get("/appuser");
        console.log(res.body); // Debugging output
        expect(res.status).to.equal(200);
    });

    it("should create a new user", async function () {
        const res = await request(baseUrl).post("/appuser").send({
            userid: "test123",
            name: "Test User",
            email: "test@example.com",
            age: 30
        });
        expect(res.status).to.equal(201);
    });

    it("should get user by ID", async function () {
        const res = await request(baseUrl).get("/appuser/test123");
        expect(res.status).to.equal(200);
    });

    it("should update user by ID", async function () {
        const res = await request(baseUrl).put("/appuser/test123").send({
            name: "Updated User",
            email: "updated@example.com",
            age: 31
        });
        expect(res.status).to.equal(200);
    });

    it("should delete user by ID", async function () {
        const res = await request(baseUrl).delete("/appuser/test123");
        expect(res.status).to.equal(200);
    });
});