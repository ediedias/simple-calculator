<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator</title>
        <link rel="styleshee" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto mt-10">
            <div class="calculator bg-white p-8 rounded shadow-md">
                <h2 class="text-2xl font-bold mb-5">Simple Calculator</h2>
                <form action="?action=calculate">
                    <div class="mb-4">
                        <input type="number" name="num1" placeholder="Enter first number" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <input type="number" name="num2" placeholder="Enter second number" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <select name="operation" class="w-full p-2 border rounded" required>
                            <option value="add">Add</option>
                            <option value="subtract">Subtract</option>
                            <option value="multiply">Multiply</option>
                            <option value="divide">Divide</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Calculate</button>
                    </div>
                </form>

                <?php if (isset($result)): ?>
                    <h3 class="text-xl font-bold">Result: <?= htmlspecialchars($result); ?></h3>
                <?php endif; ?>
            </div>
        </div>
    </body>
</html>