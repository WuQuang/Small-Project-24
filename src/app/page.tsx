import Image from "next/image";
import { Card } from "@/components/ui/card";
import { Separator } from "@/components/ui/separator";
import { Input } from "@/components/ui/input";
import { Button } from "@/components/ui/button";

export default function Home() {
  return (
    <div className="flex justify-center items-center h-screen bg-gray-900">
      <Card className="p-5 max-w-md w-full bg-gray-800 -mt-30">
        <h1 className="text-white font-bold text-2xl">Create an account</h1>
        <h2 className="text-white">Enter your email below to create your account.</h2>
        <Separator className="my-4 border-t border-white" />
        <p className="text-white font-bold">Email</p>
        <Input className="mt-2 p-2 w-full bg-gray-700 text-white border border-gray-500 rounded" placeholder="Enter your email" />
        <br />
        <p className="text-white font-bold">Password</p>
        <Input type="password" className="mt-2 p-2 w-full bg-gray-700 text-white border border-gray-500 rounded"/>
        <br />
        <Button className="mt-4 w-full bg-white text-gray-900 font-bold py-2 px-4 rounded hover:bg-gray-300">Continue
        </Button>
      </Card>
    </div>
  );
}
